<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0">BizConsult</h1>
        <!-- <img src="{{ asset('front-assets') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" @class([
                'nav-item nav-link',
                'active' => request()->routeIs('front.index'),
            ])>Home</a>
            <a href="about" @class([
                'nav-item nav-link',
                'active' => request()->routeIs('front.about'),
            ])>About</a>
            <a href="service" @class([
                'nav-item nav-link',
                'active' => request()->routeIs('front.service'),
            ])>Service</a>
            <a href="contact" @class([
                'nav-item nav-link',
                'active' => request()->routeIs('front.contact'),
            ])>Contact</a>
        </div>
    </div>
</nav>
