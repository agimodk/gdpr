<!doctype html>

<html lang="@yield('language.php')">

<head>

    {{--PAGE TITLE--}}
    <title>@yield('title')</title>

    {{-- - - - - - - - - - - - - - - - - -
    META TAGS
    - - - - - - - - - - - - - - - - - - --}}

    {{--SHARED META TAGS--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--PAGE SPECIFIC META TAGS - GOOGLE--}}
    @yield('meta-google')

    {{--PAGE SPECIFIC META TAGS - FACEBOOK--}}
    @yield('meta-facebook')

    {{--PAGE SPECIFIC META TAGS - TWITTER--}}
    @yield('meta-twitter')

    {{-- - - - - - - - - - - - - - - - - -
    STYLESHEETS
    - - - - - - - - - - - - - - - - - - --}}

    {{--SHARED THIRD PARTY STYLESHEETS--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    {{--SHARED INTERNAL STYLESHEETS--}}
    <link rel="stylesheet" href="/css/style.css">

    {{--PAGE SPECIFIC THIRD PARTY STYLESHEETS--}}
    @yield('stylesheets-page-specific-external')

    {{--PAGE SPECIFIC INTERNAL STYLESHEETS--}}
    @yield('stylesheets-page-specific-internal')

    {{-- - - - - - - - - - - - - - - - - -
    SCRIPTS
    - - - - - - - - - - - - - - - - - - --}}

    {{--SHARED THIRD PARTY SCRIPTS IN HEAD--}}
    <script src='https://www.google.com/recaptcha/api.js'></script>

    {{--SHARED INTERNAL SCRIPTS IN HEAD--}}
    <script src="/js/shared/scripts-head.js"></script>

    {{--PAGE SPECIFIC THIRD PARTY SCRIPTS IN HEAD--}}
    @yield('scripts-head-page-specific-external')

    {{--PAGE SPECIFIC INTERNAL SCRIPTS IN HEAD--}}
    @yield('scripts-head-page-specific-internal')

    {{-- - - - - - - - - - - - - - - - - -
    ICONS
    - - - - - - - - - - - - - - - - - - --}}

    {{--SHARED ICONS--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    {{--PAGE SPECIFIC ICONS--}}
    @yield('icons')

    {{-- - - - - - - - - - - - - - - - - -
    FONTS
    - - - - - - - - - - - - - - - - - - --}}

    {{--SHARED FONTS--}}

    {{--PAGE SPECIFIC FONTS--}}
    @yield('fonts')

</head>

<body>

{{-- - - - - - - - - - - - - - - - - -
CONTENT
- - - - - - - - - - - - - - - - - - --}}

{{--PAGE CONTENT--}}
@yield('body')

{{--BUY ACCOUNT BTN--}}
<div class="buy-account" data-toggle="modal" data-target="#offer">
    <i class="fas fa-shopping-cart"></i>
</div>

{{--MESSAGE--}}
<?php if(Session::has('message')): ?>
<div class="alert alert-sent">
    <div class="container">
        <a class="close" data-dismiss="alert">×</a>
        <?php echo Session::get('message'); ?>
    </div>
</div>
<?php endif; ?>

<!-- MODAL -->
<div class="modal fade" id="offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-offer" role="document">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('general.modal_header')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- BODY -->
            <div class="modal-body">
                <div class="row">

                    <div class="col-12 col-md-4 offer-sidebar">
                        <img src="https://agimo.dk/img/brigita.jpg" alt="Brigita Holendova">
                        <strong>
                            @lang('general.modal_get_offer')
                        </strong>
                        <p>
                            @lang('general.modal_description')
                        </p>
                        <p>
                        <div><b>Brigita Holendová</b></div>
                        <div class="position-type">@lang('general.modal_position')</div>
                        <br>
                        <div>
                            @lang('general.modal_telephone'): +45 93 92 88 11
                        </div>
                        <div>
                            E-Mail: brigita@agimo.dk
                        </div>
                        </p>
                        <p class="social-icons">
                            <a href="https://www.facebook.com/agimo.dk" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.linkedin.com/company/35537729/"><i class="fab fa-linkedin"></i></a>
                        </p>
                    </div>

                    <div class="col-12 col-md-8">
                        <form action="/offer" method="post">

                            @csrf

                            <input type="text" name="name" placeholder="@lang('general.modal_name')" required>
                            <input type="text" name="phone" placeholder="@lang('general.modal_phone')" required>
                            <input type="email" name="email" placeholder="@lang('general.modal_email')" required>
                            <input type="url" name="website" placeholder="@lang('general.modal_website')" required>
                            <textarea name="message" id="" cols="30" rows="6" required placeholder="@lang('general.modal_textarea')"></textarea>
                            <input type="checkbox" required name="agree" class="checkbox-modal">@lang('general.agree')

                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                                <br><br>
                                <div class="g-recaptcha"
                                     data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"
                                     data-callback="recaptchaCallback">
                                </div>
                            @endif

                            <div>
                                <button type="submit" class="send-message disabled-button" disabled="">@lang('general.modal_request')</button>
                                <button type="button" class="offer-close" data-dismiss="modal">@lang('general.modal_close')</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

{{-- - - - - - - - - - - - - - - - - -
SCRIPTS
- - - - - - - - - - - - - - - - - - --}}

{{--SHARED THIRD PARTY SCRIPTS IN FOOTER--}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

{{--SHARED INTERNAL SCRIPTS IN FOOTER--}}
<script src="/js/shared/scripts-footer.js"></script>

{{--PAGE SPECIFIC THIRD PARTY SCRIPTS IN FOOTER--}}
@yield('scripts-footer-page-specific-external')

{{--PAGE SPECIFIC THIRD PARTY SCRIPTS IN FOOTER--}}
@yield('scripts-footer-page-specific-internal')

{{-- - - - - - - - - - - - - - - - - -
ANALYTICS
- - - - - - - - - - - - - - - - - - --}}

{{--SHARED ANALYTICS--}}

{{--PAGE SPECIFIC ANALYTICS--}}
@yield('page-specific-analytics')

</body>

</html>
