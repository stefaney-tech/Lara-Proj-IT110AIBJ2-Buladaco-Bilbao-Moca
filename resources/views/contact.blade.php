@extends('layouts.app')

@section('title', 'Contact | Lately Café.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endpush

@section('content')
<section class="contact-hero">
    <div class="inner-title">
        <p class="eyebrow">WE'D LOVE TO HEAR FROM YOU</p>
        <h1>Have a little<br /><em>something to say?</em></h1>
        <p class="inner-intro">
            Questions, kind words, or a simple hello — our inbox is always open.
        </p>
    </div>
</section>

<section class="contact-layout">
    <div class="contact-details">
        <h2>We love to<br /><em>hear from you.</em></h2>
        <div class="detail-item">
            <span>EMAIL</span><a href="mailto:latelycafe@gmail.com">latelycafe@gmail.com</a>
        </div>
        <div class="detail-item">
            <span>FIND US</span>
            <p>KM 7, Ampayon<br />Butuan City, Philippines</p>
        </div>
        <div class="detail-item">
            <span>OPENING HOURS</span>
            <p>Monday – Saturday<br />11:00 AM – 11:00 PM</p>
        </div>
    </div>

    {{-- Front-end validation only (contact.js). The form does not send data. --}}
    <form class="contact-form" id="contactForm" novalidate>
        <p class="eyebrow">WHAT'S ON YOUR MIND?</p>
        <h2>Your feedback matters.</h2>
        <label for="name">Your name</label><input id="name" name="name" type="text" placeholder="e.g. Juan Dela Cruz"
            required /><small class="field-error" id="nameError"></small>
        <label for="email">Email address</label><input id="email" name="email" type="email"
            placeholder="juandelacruz@gmail.com" required /><small class="field-error" id="emailError"></small>
        <label for="subject">Subject</label><input id="subject" name="subject" type="text"
            placeholder="e.g. Feedback, Inquiry, Collaboration" required /><small class="field-error"
            id="subjectError"></small>
        <label for="message">Your message</label><textarea id="message" name="message" rows="5"
            placeholder="Write your message here..." required></textarea><small class="field-error"
            id="messageError"></small>
        <button class="submit-button" type="submit">
            SEND MESSAGE <span>↗</span>
        </button>
        <p class="form-success" id="formSuccess" role="status" aria-live="polite"></p>
        <p class="form-disclaimer">
            This demo form shows a confirmation on valid input. It does not send or
            store messages.
        </p>
    </form>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush