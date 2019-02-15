<section class="quickcontact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="company-name">
                    <a href="https://agimo.dk">Agimo - Web Solutions</a>
                </div>

                <div class="languages">
                    @if(Session::has('locale'))
                        <span class="@if(Session::get('locale')!== "dk"){{"inactive"}}@endif"><a href="/locale/dk">@lang('language.danish')</a></span>
                        <span class="@if(Session::get('locale')!== "en"){{"inactive"}}@endif"><a href="/locale/en">@lang('language.english')</a></span>
                    @else
                        <span><a href="/locale/dk">@lang('language.danish')</a></span>
                        <span class="inactive"><a href="/locale/en">@lang('language.english')</a></span>
                    @endif
                </div>

            </div>
        </div>
    </div>
</section>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 header-desc">
                <img src="img/gdpr.png" alt="">
                <h2>{{config('app.name')}} | @lang('header.subtitle')</h2>
                <h1>@yield('subpage-title')</h1>
                <p class="we-comply">
                    @yield('subpage-description')
                </p>
            </div>

                <div class="social">
                    <span><a href="https://agimo.dk"><i class="fas fa-home"></i></a></span>
                    <span><a href="https://fb.me/you"><i class="fab fa-facebook"></i></a></span>
                    <span><a href="https://www.linkedin.com/company/you"><i class="fab fa-linkedin"></i></a></span>
                    <span><a href="mailto:youremail@example.com"><i class="fas fa-envelope"></i></a></span>
                    <span><a href="tel:+4500000000"><i class="fas fa-phone-square"></i></a></span>
                </div>

        </div>
    </div>
</section>
