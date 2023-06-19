<x-layout header_tags='<script src="/js/inspirational-quotes.min.js"></script>' title="Quotes from api.vavok.net">
    <div class="container mt-5">
        <h1>Quotes from api.vavok.net/quotes/random</h1>
        <div class="mt-5">
            <button class="btn btn-primary" onclick="getVavokQuoteCors()">
                Quote Generator
            </button>
            <div id="quote" class="mt-3 border border-light p-3">Click on the button "Quote Generator" to show random quote.</div>
        </div>
        <div class="mt-5">
            <p>On this page we use only JavaScript to show quotes. CORS is now enabled on our API provider.</p>
            <p>Page <a href="/quotes/vavok-quotes">{{ config('app.url') }}/quotes/vavok-quotes</a> work when CORS is disabled, and we can't access API data directly using JavaScript.</p>
        </div>
    </div>
</x-layout>