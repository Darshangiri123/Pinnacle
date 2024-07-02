{{-- Modal Trigger --}}
<div class="container mt-4">
  @if ($errors->any())
    <script>
        // JavaScript function to display a pop-up
        function showError(message) {
            alert(message);
        }
        
        // Trigger the pop-up with the error message from the session
        showError("{{ $errors->first('error') }}");
    </script>
@endif
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      New Chat
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#privatechat">
        Private Chat
      </button>
      <br>
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#publicchat">
        Public Chat
      </button>
    </div>
  </div>
</div>
{{-- Modal Trigger end --}}

<!-- PrivateChat Modal Start -->
<div class="modal fade" id="privatechat" tabindex="-1" role="dialog" aria-labelledby="privatechatlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:110%; height:90vh">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Private Chat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
<!-- Form Inside Modal -->
        {{-- {{ route('private.chat.create') }} --}}
      
        <form action="{{ route('private.chat.create', $group->id) }}" method="post">
          @csrf
          <div class="form-group">
            <label for="addmembers">Add Member(s) to Chat With</label>
          </div>
          <div class="card" style="max-height: 400px; overflow-y: auto;">
          @foreach (auth()->user()->all_user_details as $key => $allusers)
          
            <div class="card-body">
              <div class="form-check">
                <input class="form-check-input" name="selecteduser[]" type="radio" value="{{ $allusers->id }}" id="addmembers{{ $allusers->id }}">
                <label class="form-check-label" for="addmembers{{ $allusers->id }}">
                  {{ $allusers->id }}
                  {{ $allusers->name }}
                </label>
              </div>
            </div>
          
          @endforeach
        </div>
          <button type="submit" class="btn btn-primary mt-3">Start Chatting</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- PrivateChat Modal End --}}

{{-- PublicChat Modal Start --}}
<div class="modal fade" id="publicchat" tabindex="-1" role="dialog" aria-labelledby="publicchatlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <h5 class="modal-title" id="exampleModalLabel">Public Chat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('public.chat.create', [$group->id, $group->member_ids]) }}" method="get">
          @csrf
          <div class="form-group">
            <label for="publicchatname">PublicChat Name</label>
            <input type="text" class="form-control" name="publicChatName" id="publicchatname" placeholder="Enter your name">
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- PublicChat Modal End --}}


{{-- PublicChatContent --}}
        <h5>PublicChatGroup </h5>
        
        @php
     $publicchat =  App\Models\PublicChat::where('group_id', $group->id)->first();
        @endphp

        {{-- @foreach($publicchat as $key=>$publicchats) --}}
        {{-- <div class="card mb-1">
             @if(isset($publicchat) )
             <a href="{{ route('message.send.public', [$publicchat->id, auth()->user()->user_details->id, $group->id]) }} " class="text-primary list-group-item list-group-item-action">
                 {{ $publicchat->publicChatName }}
             </a>
             @else
             <p>Create GroupChat to start a group conversation!</p>
             @endif
        </div> --}}

        <div class="card mb-3 border-0 shadow">
          <div class="card-body">
            @if(isset($publicchat))
            <a href="{{ route('message.send.public', [$publicchat->id, auth()->user()->user_details->id, $group->id]) }}" class="text-primary stretched-link">
              <h5 class="card-title">{{ $publicchat->publicChatName }}</h5>
            </a>
            @else
            <p class="card-text">Create GroupChat to start a group conversation!</p>
            @endif
          </div>
        </div>
{{-- PrivateChat Start --}}
              {{-- Pre-Exisiting Chats --}}
          <div>
            <h5>Private Chats </h5>
            @php
              $chats = new App\Models\Chat;
              // dd($chats);
              $groupChat = $chats->where('group_id',$group->id)->get();
              // dd($groupChat);
              $mychats1 = $groupChat->where('sender_id',auth()->user()->id)
                                    ->pluck('receiver_id')
                                    ->unique();
                                  
              $mychats2 =$groupChat->where('receiver_id',auth()->user()->id)
                                   ->pluck('sender_id')
                                   ->unique();
              $mychats3 = $mychats1->merge($mychats2)->unique();  
            @endphp

            @foreach ($mychats3 as $mychat1)
              @if($mychat1 !== auth()->user()->id)
                <div class="card-body list-group shadow-sm">
                      <a href="{{ route('message.send.route', [$mychat1, auth()->user()->user_details->id, $group->id]) }}" class=" text-primary text-center fs-6 list-group-item list-group-item-action">
                        {{ App\Models\User::find($mychat1)->name }}
                      </a>
                </div>
              @endif
            @endforeach





















