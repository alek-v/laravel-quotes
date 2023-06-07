<x-layout>
    @foreach($quotes as $quote)
        {{ $quote->body }}<hr />
    @endforeach
</x-layout>