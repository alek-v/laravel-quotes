<x-layout>
    <div class="container d-flex mt-5 mb-5 flex-wrap justify-content-around">
        @foreach($quotes as $quote)
            <div class="d-flex main-page-quote mb-3 bg-light p-4 rounded">
                <a href="/quote/{{ $quote->id }}">{{ $quote->body }}</a>
            </div>
        @endforeach
    </div>
</x-layout>