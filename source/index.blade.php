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
        <div class="flex-item newsletter">
            <h2>Join our Newsletter</h2>
            <form action="#">
                <input type="email" name="email" class="mail" placeholder="Enter your mail to join">
                <input type="button" value="Join" name="Join" class="button">
            </form>
        </div>
        <div class="flex-item connect">
            <div class="connect-title">
                <h2>Connect with us</h2>
            </div>
            <ul class="connect-list1">
                <li class="social-item"><a href="#">Instagram</a></li>
                <li class="social-item"><a href="#">Facebook</a></li>
                <li class="social-item"><a href="#">Linkedin</a></li>
                <li class="social-item"><a href="#">Google+</a></li>
            </ul>
        </div>
        <div class="flex-item links">
            <div class="navigate-title">
                <h2>Navigate</h2>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>copyright &copy; 2018 all rights reserved.</p>
    </div>
</footer>
@endsection
