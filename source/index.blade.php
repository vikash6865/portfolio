@extends('_layouts.master')

@section('body')
<div class="site-wrapper">
			
    <header class="header">
        <nav class="navigation">
            <ul class="navigation-list">
                <li>
                    <a class="navigation-link" href="/Home">Home </a>
                </li>
                <li>
                    <a class="navigation-link" href="/Blog">Blog </a>
                </li>
                <li> 
                    <a class="logo" href="/Home"><img src="./assets/images/abc.png" alt="Logo"></a>
                </li>
                <li>
                    <a class="navigation-link" href="/About">About </a>
                </li>
                <li>
                    <a class="navigation-link" href="/Contact">Contact us</a>
                </li>
            </ul>
            <button class="bars">
                <svg height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
            </button>
        </nav>
    </header>
    
    <div class="main-area">
        <main class="main-content">
            <div class="grid">
                <div class="grid-title">
                    <h2>. Explore .</h2>
                </div>
                <div class="images-grid">
                    <div class="grid-item">
                        <div class="image-card">
                            <img src="./assets/images/Udaipur City.jpg" alt="">
                            <h3>placename</h3>
                            <div class="image-text">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit dicta numquam</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-card">
                            <img src="./assets/images/horror -1.jpg" alt="">
                            <h3>placename</h3>
                            <div class="image-text">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit dicta numquam</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-card">
                            <img src="./assets/images/Blue Mount.jpg" alt="">
                            <h3>placename</h3>
                            <div class="image-text">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit dicta numquam</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-card">
                            <img src="./assets/images/White Mount.jpg" alt="">
                            <h3>placename</h3>
                            <div class="image-text">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit dicta numquam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog">
                <H2>.  Latest from the Blog  .</H2>
            </div>
            <div class="about">
                <div class="about-details">
                    <h1>Hi! I'm Vikash!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laborum maiores culpa, at quam quidem. Fuga eveniet voluptatibus dolorem est odit nam, adipisci, alias cum temporibus id quidem provident cupiditate?
                    </p>
                </div>
            </div>
        </main>
    </div>
</div> {{-- site-wrapper --}}
<footer>
    <div class="footer">
        <div class="flex-item Brand">
            <div class="flex-item-container">
                <h2>Brand</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error sit vitae dignissimos vel? Molestias, illum. Dicta natus dolorum, fugit odio, id at accusamus nulla optio, eveniet quos necessitatibus dolorem ullam?</p>
            </div>
        </div>
        <div class="flex-item social">
            <div class="flex-item-container">
                <h2>Connect with us</h2>
                <ul class="social-list">
                    <li class="social-item">@include('_svgs.instagram')</li>
                    <li class="social-item">@include('_svgs.google')</li>
                    <li class="social-item">@include('_svgs.twitter')</li>
                    <li class="social-item">@include('_svgs.facebook')</li>
                    <li class="social-item">@include('_svgs.linkedin')</li>
                </ul>
            </div>
        </div>
        <div class="flex-item quick">
            <div class="flex-item-container">
                <h2>Quick Contact</h2>
                <form action="#">
                    <div class="field">
                        <span class="icon">@include('_svgs.user')</span>
                        <input type="text" name="name"
                        class="name control" placeholder="Full Name">
                    </div>
                    <div class="field">
                        <span class="icon">@include('_svgs.envelope')</span>
                        <input type="email " name="email" class="mail control" placeholder="Email">
                    </div>
                    <div class="field">
                        <textarea name="message " id="msg" class="control" rows="10" placeholder="Message"></textarea>
                    </div>
                    <input type="button" value="Join" name="Send" class="button">
                    
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>copyright &copy; 2018 all rights reserved.</p>
    </div>
</footer>
@endsection
