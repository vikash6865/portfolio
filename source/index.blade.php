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
                    <li class="social-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg><a href="#">Instagram</a></li>
                    <li class="social-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"/></svg><a href="#">Facebook</a></li>
                    <li class="social-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/></svg><a href="#">Twitter</a></li>
                    <li class="social-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM164 356c-55.3 0-100-44.7-100-100s44.7-100 100-100c27 0 49.5 9.8 67 26.2l-27.1 26.1c-7.4-7.1-20.3-15.4-39.8-15.4-34.1 0-61.9 28.2-61.9 63.2 0 34.9 27.8 63.2 61.9 63.2 39.6 0 54.4-28.5 56.8-43.1H164v-34.4h94.4c1 5 1.6 10.1 1.6 16.6 0 57.1-38.3 97.6-96 97.6zm220-81.8h-29v29h-29.2v-29h-29V245h29v-29H355v29h29v29.2z"/></svg><a href="#">Google+</a></li>
                    <li class="social-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg><a href="#">Linkedin</a></li>
                </ul>
            </div>
        </div>
        <div class="flex-item quick">
            <div class="flex-item-container">
                <h2>Quick Contact</h2>
                <form action="#">
                    <input type="text" name="name"
                    class="name" placeholder="Full Name">
                    <input type="email" name="email" class="mail" placeholder="Email">
                    <textarea name="message" id="msg" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="button" value="Join" name="Join" class="button">
                    
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>copyright &copy; 2018 all rights reserved.</p>
    </div>
</footer>
@endsection
