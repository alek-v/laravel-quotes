<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Quotes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link{{ (request()->routeIs('home')) ? ' active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ (request()->routeIs('inspirational-quotes')) ? ' active' : '' }}" aria-current="page" href="/quotes/inspirational-quotes">Inspirational Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ (request()->routeIs('vavok-quotes')) ? ' active' : '' }}" aria-current="page" href="/quotes/vavok-quotes">Quotes from api.vavok.net</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ (request()->routeIs('vavok-quotes-cors')) ? ' active' : '' }}" aria-current="page" href="/quotes/vavok-quotes-cors">Quotes from api.vavok.net with enabled CORS</a>
                </li>
            </ul>
            <!--
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            -->
        </div>
    </div>
</nav>