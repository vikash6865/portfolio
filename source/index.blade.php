@extends('_layouts.master')
@section('body')
<div class="site-wrapper">
    <header class="header">
        @include('navigation')
        @include('cover')
    </header>
    <div class="main-area">
        <main class="main-content">
            @include('gallery-section')
            @include('stories-section')
            @include('about-section')
            @include('developer-section')
            @include('contact-section')
        </main>
    </div>
</div> {{-- site-wrapper --}}
@include('footer')
@endsection
