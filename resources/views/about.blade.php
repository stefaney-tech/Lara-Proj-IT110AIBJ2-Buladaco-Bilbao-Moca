@extends('layouts.app')

@section('title', 'About | Lately Café.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}" />
@endpush

@section('content')
<section class="inner-hero">
    <div class="inner-title">
        <p class="eyebrow">DEAREST GENTLE CUSTOMER</p>
        <h1>Life happens.<br /><em>We saved you a seat.</em></h1>
        <p class="inner-intro">
            A cozy pause in the middle of everything. A place created only for you.
        </p>
    </div>
    <div class="about-image">
        <img src="{{ asset('images/coffee_pastry.jpg') }}" alt="Coffee and pastry in a warmly lit café" />
    </div>
</section>

<section class="story-section">
    <div class="story-label">
        <span>01 / OUR STORY</span><span>THE LATELY WAY</span>
    </div>
    <div class="story-copy">
        <h2>For the days that move too fast, <em>stay a little.</em></h2>
        <p>
            Lately began with a simple thought: everyone deserves a moment to slow
            down. A familiar cup, a fresh pastry, a good conversation, or even a
            quiet corner to yourself can make an ordinary day feel special.
        </p>
        <p>
            We bring together thoughtfully prepared coffee, freshly baked treats,
            and a welcoming space where little moments become the best part of your
            day.
        </p>
        <button class="text-button read-more-btn" type="button" aria-expanded="false">
            READ OUR LITTLE NOTE <span>＋</span>
        </button>
        <p class="extra-story" hidden>
            We believe the best café experiences are never rushed. From the first
            pour to the last crumb, every detail is made to feel warm, personal, and
            worth returning for. We hope to be part of your day, lately.
        </p>
    </div>
</section>

<section class="values-section">
    <div class="section-heading">
        <p class="eyebrow">WHAT WE BELIEVE IN</p>
        <h2>Simple things.<br /><em>Made meaningful.</em></h2>
    </div>
    <div class="values-grid">
        <article>
            <span>01</span>
            <h3>Mission</h3>
            <p>
                To inspire and nurture human connection with every cup, conversation,
                and community
            </p>
        </article>
        <article>
            <span>02</span>
            <h3>Vision</h3>
            <p>
                To be the premier purveyor of the finest coffee in the world,
                inspiring and nurturing the human spirit — one person, one cup and one
                neighborhood at a time.
            </p>
        </article>
        <article>
            <span>03</span>
            <h3>Values</h3>
            <p>
                We celebrate life's everyday pauses, because the little things are
                often the big things.
            </p>
        </article>
    </div>
</section>

<section class="team-section">
    <p class="eyebrow">THE PEOPLE BEHIND THE SCENES</p>
    <h2>A small team with <em>big heart.</em></h2>
    <div class="team-grid">
        <article>
            <div class="team-avatar avatar-one">
                <img src="{{ asset('images/member1-portrait.png') }}" alt="Member 1 portrait" />
            </div>
            <h3>Member 1</h3>
            <p>Project Setup, Layout, Home Page</p>
        </article>
        <article>
            <div class="team-avatar avatar-two">
                <img src="{{ asset('images/member2-portrait.png') }}" alt="Member 2 portrait" />
            </div>
            <h3>Member 2</h3>
            <p>About Page</p>
        </article>
        <article>
            <div class="team-avatar avatar-three">
                <img src="{{ asset('images/member3-portrait.png') }}" alt="Member 3 portrait" />
            </div>
            <h3>Member 3</h3>
            <p>Contact Page</p>
        </article>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush