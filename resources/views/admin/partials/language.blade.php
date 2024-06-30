<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'en' ? 'ar' : 'en') }}">
    {{ LaravelLocalization::getCurrentLocale() == 'en' ? 'العربية' : 'English' }}
    </a>