<x-layout>
    <div class="container mt-5 bg-light p-5 rounded">
        <div class="row">
            <p>{{ $quote->body }}</p>
        </div>
        <div class="row mt-5">
            <p><a href="{{ url()->previous() }}">Back to quotes</a></p>
        </div>
    </div>
</x-layout>