@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $topics->title }}</div>

                    <div class="card-body">
                        <p>{{ $topics->description }}</p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Messages</div>

                    <div class="card-body">
                        @foreach($messages as $message)
                            <div class="message">
                                <p>{{ $message->content }}</p>
                                <p>Posted by: {{ $message->user->name }}</p>
                                <p>Posted at: {{ $message->created_at->format('Y-m-d H:i:s') }}</p>

                                <form action="{{ route('forum.replies.store', $message->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="content" class="form-control" rows="3" placeholder="Reply to this message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reply</button>
                                </form>

                                <div class="replies">
                                    @foreach($message->replies as $reply)
                                        <div class="reply">
                                            <p>{{ $reply->content }}</p>
                                            <p>Replied by: {{ $reply->user->name }}</p>
                                            <p>Replied at: {{ $reply->created_at->format('Y-m-d H:i:s') }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Form to create a new message -->
                <div class="card mt-3">
                    <div class="card-header">Post a Message</div>

                    <div class="card-body">
                        <form action="{{ route('forum.messages.store', $topic->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="5" placeholder="Write your message here"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
