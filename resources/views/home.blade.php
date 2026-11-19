@extends('layouts.app')

@section('title', 'Lately Café | Pastries & Beverages')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endpush

@section('content')
<section class="hero-panel" id="home">
    <div class="hero-brand" aria-label="Lately">
        <span class="brand-title">Lately<span>.</span></span>
        <span class="brand-mark">PASTRIES & BEVERAGES</span>
    </div>

    <div class="food-stage" aria-label="Our coffee and freshly baked treats">
        <div class="stage-image">
            <img src="{{ asset('images/apple-lemonade.png') }}" alt="Apple pomegranate lemonade refresher" />
        </div>
        <div class="stage-image active">
            <img src="{{ asset('images/coffee-cake.png') }}" alt="Classic coffee cake" />
        </div>
        <div class="stage-image">
            <img src="{{ asset('images/matcha-latte.png') }}" alt="Matcha latte" />
        </div>
        <div class="stage-image">
            <img src="{{ asset('images/chocolate-croissant.png') }}" alt="Chocolate croissant" />
        </div>
        <div class="stage-image">
            <img src="{{ asset('images/mocha-frappe.png') }}" alt="Mocha cookie crumble frappe" />
        </div>
    </div>
    <a class="round-arrow hero-prev" href="#home" aria-label="Previous treat">‹</a>
    <a class="round-arrow hero-next" href="#home" aria-label="Next treat">›</a>
</section>

<section class="featured-section" id="featured">
    <div class="section-heading">
        <p class="eyebrow">A LITTLE SOMETHING FOR YOUR DAY</p>
        <h1>
            Are you ready for it?<br /><em>Let us handle your cravings.</em>
        </h1>
    </div>
    <div class="product-grid">
        <article class="product-card">
            <div class="product-photo photo-green">
                <img src="{{ asset('images/chocolate-pistachio-loaf.png') }}" alt="Chocolate pistachio loaf" />
            </div>
            <div class="product-info">
                <span class="product-category">PASTRY</span>
                <h2>Chocolate Pistachio Loaf</h2>
                <p>Rich chocolate and pistachio in every slice.</p>
                <div class="product-meta">
                    <span class="price">₱145</span><span class="tiny-note">✦ Favorites</span>
                </div>
            </div>
        </article>
        <article class="product-card">
            <div class="product-photo photo-orange">
                <img src="{{ asset('images/iced-tiramisu-latte.png') }}" alt="Iced tiramisu latte" />
            </div>
            <div class="product-info">
                <span class="product-category">LATTE</span>
                <h2>Iced Tiramisu Latte</h2>
                <p>Cool, creamy coffee with a cocoa finish.</p>
                <div class="product-meta">
                    <span class="price">₱165</span><span class="tiny-note">◷ 5 min</span>
                </div>
            </div>
        </article>
        <article class="product-card">
            <div class="product-photo photo-yellow">
                <img src="{{ asset('images/mini-pumpkin-pie.png') }}" alt="Mini thick pumpkin pie" />
            </div>
            <div class="product-info">
                <span class="product-category">PASTRY</span>
                <h2>Mini Thick Pumpkin Pie</h2>
                <p>A warm little pie with a spiced pumpkin center.</p>
                <div class="product-meta">
                    <span class="price">₱135</span><span class="tiny-note">✦ Freshly baked</span>
                </div>
            </div>
        </article>
    </div>
    <div class="carousel-controls" aria-label="Featured collection controls">
        <button class="carousel-arrow" id="prevProducts" aria-label="Previous treats">
            ‹
        </button>
        <div class="carousel-dots">
            <button class="dot active" aria-label="Show collection 1"></button><button class="dot"
                aria-label="Show collection 2"></button><button class="dot"
                aria-label="Show collection 3"></button><button class="dot" aria-label="Show collection 4"></button>
        </div>
        <button class="carousel-arrow" id="nextProducts" aria-label="Next treats">
            ›
        </button>
    </div>
    <div class="bottom-note">
        <span>HOW ARE YOU LATELY?</span><a href="{{ url('/about') }}">GET TO KNOW US ↗</a>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Tells home.js where the product images live.
window.LATELY_IMAGE_PATH = "{{ asset('images') }}/";
</script>
<script src="{{ asset('js/home.js') }}"></script>
@endpush