@extends('layouts.main')

@section ('content')


<h1>Forum</h1>

    @foreach($topics as $topic)
        <div class="topic">
            <h2>{{ $topic->title }}</h2>
            <img src="{{ $topic->image_url }}" alt="Topic Image">
            <p>{{ $topic->content }}</p>

            <div class="messages">
                @foreach($topic->messages as $message)
                    <div class="message">
                        <p>{{ $message->content }}</p>
                        <p>Posted by: {{ $message->user->name }}</p>

                        <form method="post" action="{{ route('forum.like', ['message' => $message->id]) }}">
                            @csrf
                            <button type="submit">Like</button>
                        </form>

                        <form method="post" action="{{ route('forum.reply', ['message' => $message->id]) }}">
                            @csrf
                            <textarea name="reply_content" placeholder="Reply to this message"></textarea>
                            <button type="submit">Reply</button>
                        </form>

                        @foreach($message->replies as $reply)
                            <div class="reply">
                                <p>{{ $reply->content }}</p>
                                <p>Posted by: {{ $reply->user->name }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach














<!-- <div class="forum-message">
  <h2>Forum Message</h2>
  <form id="messageForm" action="save_message.php" method="post">
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea>
    <br>
    <button type="button" onclick="confirmCancel()">Cancel</button>
    <button type="submit">Submit</button>
  </form>
</div>

<script>
  function confirmCancel() {
    var result = window.confirm("Are you sure you want to cancel?");

    if (result) {
      window.location.href = "forum.php"; // Replace "forum.php" with the actual forum page URL
    }
  }
</script> -->

@endsection