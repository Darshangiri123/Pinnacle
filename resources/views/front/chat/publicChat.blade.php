@extends('front.layouts.default')

@section('content')
<div class="container bg-gradient" style="width:100%">
    <div class="row">
      <div class="col-md-6 offset-md-2">
        <div class="card" style="width:130%;height:80vh">
          <div class="card-header">
            Chat
          
          </div>
          <div class="card-body chat-container" id="chat-container" style="overflow-y: auto; max-height: 400px;">
          <div class="card-body chat-container" id="chat-container" style="overflow-y: auto; max-height: 400px;">
            @foreach ($chats as $chat)
                @if ($chat->sender_id == auth()->user()->id)
                <div class="text-end chat-right chat-bubble">
                  <div>{{ $chat->sender_id->sender_name }}</div>
                  <div>{{ $chat->message }}</div>
                </div>                   
                @else
                <div class="text-start chat-left chat-bubble">
                  <div>{{ $chat->sender_id->sender_name }}</div>
                  <div>{{ $chat->message }}</div>
                </div>
                @endif
            @endforeach
        </div>
              <div class="card-footer">
                 <div class="input-group">
                    <form action="{{ route('message.send.public', $receiver) }}" method="GET">
                    @csrf
                  <div class="form-group">
                      <input type="text" class="form-control" name="message" id="textInput" placeholder="Enter message">
                      <input type="hidden" name="group_id" value="{{ $groupId }}">
                      <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                  </form>

                 </div>
              </div>
          </div>
        </div>
      </div>
            {{-- <div class="text-start">
                @foreach($chats->where('receiver_id',$receiver->id) as $key => $chat)
                    <div>{{ $chat->message }}</div>
                @endforeach 
            </div>
            <div class="text-end">
                @foreach($chats->where('sender_id',auth()->user()->id) as $key => $chat)
                    <div>{{ $chat->message }}</div>
                @endforeach 
            </div> --}}
            {{-- <ul class="list-group">
                

                <div class="text-start bg-warning ">
                  
                    <p>Receiver ID: {{ $receiver->user_details->id }}</p>
                    <p>Receiver Name: {{ $receiver->user_details->name }}</p>
                    <p>Group ID = {{ $receiver->current_group_id }}
                 
                   
                </div>

              
            <hr>
 
                <div class="text-end bg-warning bg-gradient">
                    <p>Sender ID:{{ auth()->user()->id }}</p>
                    <p>Sender Name:{{ auth()->user()->name }}</p>

                </div>
           
            
            </ul> --}}
         
            <script>
              // Function to scroll the chat container to the bottom
              function scrollToBottom() {
                  var chatContainer = document.getElementById('chat-container');
                  chatContainer.scrollTop = chatContainer.scrollHeight;
              }
          
              // Call the function to scroll to the bottom when the page loads
              window.onload = function() {
                  scrollToBottom();
              };
          
              // You can call scrollToBottom() whenever new messages are added to the chat as well.
          </script>
  <style>
     .chat-container {
  display: flex;
  flex-direction: column; /* Stack messages vertically */
}

.chat-bubble {
  max-width: 80%;
  margin: 10px;
  padding: 10px;
  border-radius: 20px;
  background-color: #f0f0f0;
  display: inline-block;
}

.chat-left {
  align-self: flex-start; /* Align left-aligned bubbles to the start of the container */
}

.chat-right {
  align-self: flex-end; /* Align right-aligned bubbles to the end of the container */
}
  </style>
  @endsection