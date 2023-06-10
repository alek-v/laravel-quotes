<x-layout>
    <div class="container mt-5 mb-5 bg-light p-5 rounded">
        <div class="row">
            <p>{{ $quote->body }}</p>
        </div>
        <div class="row mt-5">
            @foreach($comments as $comment)
                <div class="mt-3 mb-4 p-3 border border-secondary rounded">
                    <div class="border-bottom border-secondary">
                        <p class="mb-0">{{ $comment->author->name }}</p>
                        <p class="fw-light">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="mt-3">{{ $comment->body }}</div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <p><a href="{{ url()->previous() }}">Back to quotes</a></p>
        </div>
    </div>
</x-layout>