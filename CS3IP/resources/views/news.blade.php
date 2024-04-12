@extends('layouts.main')

@section('content')
<div class="news-h2">
    <h2 class="mb-4">Discussions</h2>
</div>

<div class="container-news">
    <div class="row">
        @foreach($topics as $topics)
            <div class="col-md-4 mb-4">
                <a href="{{ route('topics.news', $topics->id) }}" class="card-link"> 
                    <div class="card news-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $topics->title }}</h5>
                            <p class="card-text">{{ $topics->description }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
