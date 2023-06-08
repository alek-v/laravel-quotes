<x-layout>
    <div class="container d-flex mt-5 flex-wrap justify-content-around">
        @if (count($quotes) == 0)
            <div class="d-flex main-page-quote mb-3 alert alert-primary p-4 rounded justify-content-center">
                <p class="mb-0">No quotes at this time.</p>
            </div>
        @else
            @foreach($quotes as $quote)
                <div class="d-flex main-page-quote mb-3 bg-light p-4 rounded">
                    <a href="/quote/{{ $quote->id }}">{{ $quote->body }}</a>
                </div>
            @endforeach
        @endif
    </div>
    <div class="container mt-5 mb-5">
        {{ $quotes->links() }}
    </div>
</x-layout>