<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\PublicChat;
use App\Models\GroupUser;
use App\Models\Group;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ChatsController extends Controller
{
    // public function index(Request $request,$groupId,$receiverId){
    //     $receiver = User::find($receiverId);
    //     $chats = Chat::where('group_id',$groupId)
    //                     ->orderBy('created_at')
    //                     ->get();

    //     return view('front.chat.chat', [
    //         'receiver'=>$receiver,
    //         'groupId' => $groupId,
    //         'chats' => $chats
    //     ]);
    // }
    public function createPublic(Request $request, $groupid, $receiverId) {
        $existingGroup = PublicChat::where('group_id', $groupid)->first();

        if ($existingGroup) {
            return response()->json(['error' => 'Group already exists'], 422);
        }
        $publicChatName = new PublicChat();
        $publicChatName->group_id = $groupid;
        $publicChatName->publicChatName = $request->publicChatName;
        $publicChatName->sender_id = auth()->user()->id;
        $publicChatName->receiver_id = $groupid;
        $publicChatName->message = "Send a message to start the conversation!";
        $publicChatName->save();
      
        $groupmemberIds = GroupUser::where('group_id', $groupid)->pluck('user_id');
        $groupmembers = User::whereIn('id', $groupmemberIds)->pluck('name');
        $group = Group::where('id', $groupid)->first();
    
        $themeId = Group::where('id', $groupid)->first()->community_id;
        
        return view('front.layouts.group', [
            'publicChatName' => $publicChatName,
            'allreceivers' => $receiverId,
            'groupId' => [$groupid],
            'group' => $group,
            'themeId'=>$themeId,
        ]);
    }

    public function createPrivate(Request $request, $groupId){

        $selectedUserId = $request->input('selecteduser');
        // $receiver = User::whereIn('id', $selectedUsersId)->get();
        $receiver = $selectedUserId[0];
       
        $group = Group::where('id', $groupId)->first();
        $allReceivers2 = $receiver;

        $themeId = Group::where('id', $groupId)->first()->community_id;

        $chats = new Chat();
        $chats->sender_id = auth()->user()->id;
        $chats->receiver_id = $selectedUserId[0];
        $chats->message = "Send a message to start the conversation!";
        $chats->group_id = $groupId;
        $chats->save();

        $chats = Chat::where('group_id',$groupId)
        ->where('receiver_id',$selectedUserId)
        ->orderBy('created_at')
        ->get();
        // 'front.layouts.group'
        return view('front.chat.chat',[
            'receiver'=>$receiver,
            'groupId' => $groupId,
            'chats' => $chats,
            'group'=>$group,
            'allReceivers2'=>$allReceivers2,
            'themeId'=>$themeId,
        ]);
    }

   

    public function send(Request $request, $receiverId, $senderId, $groupId){
        // dd("in private functioon");
      if ($request->hasAny('message')) 
      {
        $chat = new Chat();
        $chat->sender_id = $senderId;
        $chat->receiver_id = $receiverId;
        $chat->message = $request->message;
        $chat->group_id = $request->group_id;
        $chat->save();
      }
     
        $chats = Chat::where('group_id', $groupId)
        ->where(function ($query) use ($receiverId, $senderId) {
            $query->where('receiver_id', $receiverId)
                  ->where('sender_id', $senderId);
        })
        ->orWhere(function ($query) use ($receiverId, $senderId) {
            $query->where('receiver_id', $senderId)
                  ->where('sender_id', $receiverId);
        })
        ->orderBy('created_at')
        ->get();
        
        $themeId = Group::where('id', $groupId)->first()->community_id;


        return view('front.chat.chat', [
            'chats'=>$chats,
            'receiver'=>$receiverId,
            'groupId'=>$groupId,
            'themeId'=>$themeId,
        ]);
    }

    public function sendpublic(Request $request, $publicChatId, $senderId, $groupId){
    //    dd("in public function");
     if ($request->hasAny('message')) 
     {
        
        $chat = new PublicChat();
        $chat->group_id = $request->group_id;
        $chat->publicChatName = PublicChat::where('group_id', $publicChatId)->first()->publicChatName;
        $chat->sender_id = $senderId;
        $chat->message = $request->message;
        $chat->save();
     }
     $receiverId = $groupId;
     $chats = PublicChat::where('group_id', $groupId)
                        // ->where('sender_id', $senderId)
                        ->orderBy('created_at')
                        ->get();

    $themeId = Group::where('id', $groupId)->first()->community_id;


    return view('front.chat.chat', [
         'chats'=>$chats,
         'groupId'=>$groupId,
         'receiver'=>$receiverId,
         'themeId'=>$themeId,
       ]);
    }

    public function updateChat()
    {
        dd("in updateChat");
        // Fetch the latest messages from the database
        $chats = Chat::latest()->get();

        // Render the chat messages using a Blade view
        $chatHtml = view('front.chat.latestmessages', compact('chats'))->render();

        // Return the updated HTML content of the chat card
        return response()->json(['chatHtml' => $chatHtml]);
    }
}
