{{--MASTER FILE--}}
@extends('layouts.master')

{{--PAGE LANGUAGE--}}
@section('language.php', 'en')

{{--PAGE TITLE--}}
@section('title', 'YOU / GDPR Privacy Center')

{{--GOOGLE META TAGS--}}
@section('meta-google')

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

@endsection

{{--FACEBOOK META TAGS--}}
@section('meta-facebook')

    <meta property="og:url" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

@endsection

{{--TWITTER META TAGS--}}
@section('meta-twitter')

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

@endsection

{{--PAGE SPECIFIC THIRD PARTY STYLESHEETS--}}
@section('stylesheets-page-specific-external')

@endsection

{{--PAGE SPECIFIC INTERNAL STYLESHEETS--}}
@section('stylesheets-page-specific-internal')

@endsection

{{--PAGE SPECIFIC THIRD PARTY SCRIPTS IN HEADER--}}
@section('scripts-head-page-specific-external')

@endsection

{{--PAGE SPECIFIC INTERNAL SCRIPTS IN HEADER--}}
@section('scripts-head-page-specific-internal')

@endsection

{{--PAGE SPECIFIC ICONS--}}
@section('icons')

@endsection

{{--PAGE SPECIFIC FONTS--}}
@section('fonts')

@endsection

{{--BODY OF THE ELEMENT--}}
@section('body')

    {{--SUBPAGE TITLE--}}
@section('subpage-title')
    @lang('index.page_title')
@endsection

{{--SUBPAGE DESCRIPTION--}}
@section('subpage-description')
    @lang('index.page_description')
@endsection

@include('elements.header')

<section class="options">

    <div class="container">
        <div class="row">

            <div class="col-md-3 company-details">

                @include('elements.sidebar')

            </div>

            <div class="col-md-9 options-list">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-cookie-bite"></i>
                            <h2>@lang('index.cookies_title')</h2>
                            <p>@lang('index.cookies_text')</p>
                            <a href="/cookies">
                                <button>@lang('index.cookies_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-user-secret"></i>
                            <h2>@lang('index.privacy_title')</h2>
                            <p>@lang('index.privacy_text')</p>
                            <a href="/privacy-policy">
                                <button>@lang('index.privacy_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-gavel"></i>
                            <h2>@lang('index.copyright_title')</h2>
                            <p>@lang('index.copyright_text')</p>
                            <a href="/copyright">
                                <button>@lang('index.copyright_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="far fa-images"></i>
                            <h2>@lang('index.media_title')</h2>
                            <p>@lang('index.media_text')</p>
                            <a href="/media-credits">
                                <button>@lang('index.media_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-users"></i>
                            <h2>@lang('index.imprint_title')</h2>
                            <p>@lang('index.imprint_text')</p>
                            <a href="https://datacvr.virk.dk/data/visenhed?enhedstype=virksomhed&id=40049673">
                                <button>@lang('index.imprint_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="far fa-building"></i>
                            <h2>@lang('index.disclaimer_title')</h2>
                            <p>@lang('index.disclaimer_text')</p>
                            <a href="/disclaimer">
                                <button>@lang('index.disclaimer_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class=" option item">
                            <i class="fas fa-comments"></i>
                            <h2>@lang('index.dpo_title')</h2>
                            <p>@lang('index.dpo_text')</p>
                            <a href="/data-protection-officer">
                                <button>@lang('index.dpo_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-unlink"></i>
                            <h2>@lang('index.unsubscribe_title')</h2>
                            <p>@lang('index.unsubscribe_text')</p>
                            <a href="/unsubscribe">
                                <button>@lang('index.unsubscribe_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="far fa-edit"></i>
                            <h2>@lang('index.rectification_title')</h2>
                            <p>@lang('index.rectification_text')</p>
                            <a href="/rectification">
                                <button>@lang('index.rectification_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-eraser"></i>
                            <h2>@lang('index.forget_title')</h2>
                            <p>@lang('index.forget_text')</p>
                            <a href="/forget-me">
                                <button>@lang('index.forget_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-database"></i>
                            <h2>@lang('index.data_title')</h2>
                            <p>@lang('index.data_text')</p>
                            <a href="/request-data">
                                <button>@lang('index.data_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-file-alt"></i>
                            <h2>@lang('index.access_title')</h2>
                            <p>@lang('index.access_text')</p>
                            <a href="/access-data">
                                <button>@lang('index.access_button')</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="option item">
                            <i class="fas fa-hand-paper"></i>
                            <h2>@lang('index.restriction_title')</h2>
                            <p>@lang('index.restriction_text')</p>
                            <a href="/data-restriction">
                                <button>@lang('index.restriction_button')</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

@endsection

{{--PAGE SPECIFIC THIRD PARTY SCRIPTS IN FOOTER--}}
@section('scripts-footer-page-specific-external')

@endsection

{{--PAGE SPECIFIC INTERNAL SCRIPTS IN FOOTER--}}
@section('scripts-footer-page-specific-internal')

@endsection

{{--PAGE SPECIFIC ANALYTICS--}}
@section('scripts-footer-page-specific-internal')

@endsection

