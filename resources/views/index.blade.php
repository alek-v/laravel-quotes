<x-layout>
    <div class="container main-page">
        @foreach($quotes as $quote)
            {{ $quote->body }}<hr />
        @endforeach
    </div>
</x-layout>