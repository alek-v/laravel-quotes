<x-layout>
    <div class="container main-page">
        @foreach($quotes as $quote)
            <div class="row mb-3">
                <a href="/quote/{{ $quote->id }}">{{ $quote->body }}</a>
            </div>
        @endforeach
    </div>
</x-layout>