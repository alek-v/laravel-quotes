<x-layout>
    <div class="container mt-3">
    <div class="row mb-3">
        {{ $quote->body }}
    </div>
    <div class="row">
        <a href="{{ url()->previous() }}">Back to quotes</a>
    </div>
        
    </div>
</x-layout>