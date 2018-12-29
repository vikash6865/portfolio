@extends('_layouts.master')

@section('body')
<div class="site-wrapper">
			
    <header class="header">
        <nav class="navigation">
            <ul class="navigation-list nav-left">
                <li>
                    <a class="navigation-link" href="/#">Home</a>
                </li>
                <li>
                    <a class="navigation-link" href="#">Galleries</a>
                </li>
                <li>
                    <a class="navigation-link" href="/Stories">Stories</a>
                </li>
            </ul>
            <div class="nav-center">
                <a class="logo" href="/Home">
                    @include('_svgs/signature')
                </a>
            </div>
            <ul class="navigation-list nav-right">
                <li>
                    <a class="navigation-link" href="/About">About </a>
                </li>
                {{-- testimonials --}}
                <li>
                    <a class="navigation-link" href="/Contact">Contact us</a>
                </li>
            </ul>
            <button class="bars">
                <svg height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
            </button>
        </nav>
        <div class="cover-category">
            <div class="photography category">
                <a href="/#">@include('_svgs/photo-camera')</a>
                <h1>Photography</h1>
            </div>
            <div class="development category">
                <a href="/#">@include('_svgs/code1')</a>
                <h1>Development</h1>
            </div>
        </div>
    </header>
    
    <div class="main-area">
        <main class="main-content">
            <div class="gallery-section">
                    <h1 class="section-title gallery">Recent Photos</h1>
                    <div class="polaroid-container">
                        
                    </div>
            </div>
            <div class="stories-section">
                <h1 class="section-title stories">New Stories</h1>
                <div class="stories-container">
                    <div class="story-card">
                        <div class="place-name">place</div>
                        <img src="/assets/images/Udaipur City.jpg" alt="here is an image">
                        <h3 class="story-title">Title</h3>
                        <h5 class="story-date">22 July 2018</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                        <div class="read-more button">
                                <a href="#">read</a>
                            </div>
                    </div>
                    <div class="story-card">
                            <div class="place-name">place</div>
                            <img src="./assets/images/horror -1.jpg" alt="here is an image">
                            <h3 class="story-title">Title</h3>
                            <h5 class="story-date">22 July 2018</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                            <div class="read-more button">
                                    <a href="#">read</a>
                                </div>
                    </div>
                    <div class="story-card">
                            <div class="place-name">place</div>
                            <img src="./assets/images/Ghat Sunset.jpg" alt="here is an image">
                            <h3 class="story-title">Title</h3>
                            <h5 class="story-date">22 July 2018</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                            <div class="read-more button">
                                <a href="#">read</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="about-section">
                <h1 class="section-title about">About me</h1>
                <div class="details-container">
                    <div class="developer-details">
                        <h2 class="developer">Developer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque error nobis reiciendis voluptas quam tenetur eaque adipisci repellendus pariatur corporis perspiciatis, minus ratione delectus deleniti alias. Quasi error ratione sequi.</p>
                    </div>
                    <div class="photographer-details">
                        <h2 class="photographer">photographer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odit non natus provident, laborum ullam, dolorum magnam hic, temporibus ad possimus tenetur culpa distinctio accusamus rerum amet! Ea, cupiditate officiis!</p>
                    </div>
                </div>
            </div>
            <div class="developer-section">
                <h1 class="section-title dev-work">Recent Projects</h1>
                <div class="dev-container">
                    <div class="dev-card">
                        <img src="./assets/images/work1.png" alt="here is an image">
                        <h3 class="dev-title">work </h3>
                        <h5 class="dev-date">22 July 2018</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                   </div>
                   <div class="dev-card mid">
                        <img src="./assets/images/work2.jpg" alt="here is an image">
                        <h3 class="dev-title">work </h3>
                        <h5 class="dev-date">22 July 2018</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                   </div>
                   <div class="dev-card">
                        <img src="./assets/images/work3.jpg" alt="here is an image">
                        <h3 class="dev-title">work </h3>
                        <h5 class="dev-date">22 July 2018</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut perspiciatis libero aperiam aspernatur? Optio, sed! Ab minima voluptatibus atque suscipit, provident labore quia eveniet consectetur voluptatum, hic impedit in officia.</p>
                   </div>
                </div>
            </div>
            <div class="contact-section">
                <div class="contact-illustration">
                </div>
                <div class="form-container">
                    <h1 class="section-title">Contact</h1>
                    <form action="#">
                            <div class="field">
                                {{-- <span class="icon">@include('_svgs.user')</span> --}}
                                <input type="text" name="name"
                                class="name control" placeholder="Full Name">
                            </div>
                            <div class="field">
                                {{-- <span class="icon">@include('_svgs.envelope')</span> --}}
                                <input type="email " name="email" class="mail control" placeholder="Email">
                            </div>
                            <div class="field">
                                <textarea name="message " id="msg" class="control" rows="10" placeholder="Message"></textarea>
                            </div>
                            <input type="button" value="Send" name="Send" class="button">
                            
                        </form>
                </div>
            </div>
        </main>
    </div>
</div> {{-- site-wrapper --}}
<footer>
    {{-- <div class="wave">
        @include('_svgs/path')
    </div> --}}
    <div class="newsletter-section">
        <h2  class="section-title">subscribe to our newsletter</h2   >
            <form action="#">
                <div class="field">
                <input type="email" name="email" placeholder="Email">
                <input type="button" value="join" name="join" class="button">
            </div>
            </form>
    </div>
    <div class="links-section">
        <h5>follow:</h5>
        <div class="link-list">
            <a href="" class="link-item">@include('_svgs/circular-stroke-brands/google-plus')</a>
            <a href="" class="link-item">@include('_svgs/circular-stroke-brands/facebook')</a>
            <a href="" class="link-item">@include('_svgs/circular-stroke-brands/twitter')</a>
            <a href="" class="link-item">@include('_svgs/circular-stroke-brands/linkedin')</a>
            <a href="" class="link-item">@include('_svgs/circular-stroke-brands/youtube')</a>
        </div>
        <div class="copyright">
            <p>copyright 2018 all rights reseverd</p>
        </div>
    </div>
    <div class="footer-section">

    </div>
</footer>
@endsection
