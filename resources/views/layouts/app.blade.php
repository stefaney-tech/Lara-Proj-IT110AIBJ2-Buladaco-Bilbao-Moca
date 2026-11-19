<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Lately Café — beverages, pastries, and little moments worth slowing down for." />
    <title>@yield('title', 'Lately Café | Pastries & Beverages')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap"
        rel="stylesheet" />

    {{-- Shared styles (every page has this) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    {{-- Page-specific styles are pushed here by each view --}}
    @stack('styles')
</head>

<body>
    <main class="site-shell">
        {{--- Navigation bar ---}}
        <header class="site-header">
            <a class="wordmark-small" href="{{ url('/') }}" aria-label="Lately home">
                <img src="{{ asset('images/logo.png') }}" alt="Lately logo" />
            </a>
            <nav class="main-nav" id="mainNav" aria-label="Main navigation">
                <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                <a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                <a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
            </nav>
            <div class="header-actions">
                <button class="theme-toggle" type="button" aria-label="Switch to dark mode"
                    title="Toggle dark/light mode">
                    <span class="theme-icon" aria-hidden="true">☾</span>
                </button>
                <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
                    ☰
                </button>
            </div>
        </header>

        {{--- Page content ---}}
        @yield('content')

        {{--- Footer ---}}
        <footer class="site-footer">
            <a href="{{ url('/') }}" aria-label="Lately home">
                <img src="{{ asset('images/logo.png') }}" alt="Lately logo" />
            </a>
            <span>STEFANEY BULADACO ✦ BERNIE BILBAO ✦ RANIER MOCA.</span>
            <span>© 2026 LATELY CAFÉ</span>
        </footer>
    </main>

    {{--- Shared script (theme toggle + mobile menu) ---}}
    <script src="{{ asset('js/main.js') }}"></script>

    {{--- Page-specific scripts are pushed here by each view ---}}
    @stack('scripts')
</body>

</html>