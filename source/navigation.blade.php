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