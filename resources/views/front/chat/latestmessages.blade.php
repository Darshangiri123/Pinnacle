@foreach ($chats as $chat)
   @if ($chat->sender_id == auth()->user()->id)
    <div class="text-end chat-right chat-bubble">
        <div>{{ $chat->sender->name }}</div>
        <div>{{ $chat->message }}</div>
    </div>
    @elseif ($chat->sender_id == 0)
    <div class="text-center chat-bubble">
        <div>{{ $chat->message }}</div>
    </div>
    @else
    <div class="text-start chat-left chat-bubble">
        <div>{{ $chat->sender->name }}</div>
        <div>{{ $chat->message }}</div>
    </div>
    @endif
@endforeach
