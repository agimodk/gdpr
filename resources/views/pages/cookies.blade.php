{{--MASTER FILE--}}
@extends('layouts.master')

{{--PAGE LANGUAGE--}}
@section('language.php', 'en')

{{--PAGE TITLE--}}
@section('title', 'Agimo / GDPR Privacy Center - Cookies')

{{--GOOGLE META TAGS--}}
@section('meta-google')

    <meta name="description"            content="">
    <meta name="keywords"               content="">
    <meta name="author"                 content="">

@endsection

{{--FACEBOOK META TAGS--}}
@section('meta-facebook')

    <meta property="og:url"             content="" />
    <meta property="og:type"            content="" />
    <meta property="og:title"           content="" />
    <meta property="og:description"     content="" />
    <meta property="og:image"           content="" />

@endsection

{{--TWITTER META TAGS--}}
@section('meta-twitter')

    <meta name="twitter:card"           content="">
    <meta name="twitter:site"           content="">
    <meta name="twitter:creator"        content="">
    <meta name="twitter:title"          content="">
    <meta name="twitter:description"    content="">
    <meta name="twitter:image"          content="">

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
        @lang('cookie.page_title')
    @endsection

    {{--SUBPAGE DESCRIPTION--}}
    @section('subpage-description')
        @lang('cookie.page_description')
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

                        <div class="col-md-12 available-options">
                            <p class="available-actions"><a href="/"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;@lang('general.return')</a></p>
                        </div>

                        <div class="col-md-12">
                            <h2>@lang('cookie.sub_title')</h2>
                            <br>
                            <p>@lang('cookie.paragraph_1')</p>
                            <p>@lang('cookie.paragraph_2')</p>
                            <p>@lang('cookie.paragraph_3')</p>
                            <p>@lang('cookie.paragraph_4')</p>
                            <p>@lang('cookie.paragraph_5')</p>
                            <p>@lang('cookie.paragraph_6')</p>
                            <p><b>@lang('cookie.paragraph_7')</b></p>
                            <p>@lang('cookie.paragraph_8')</p>
                            <ul>
                                <li>@lang('cookie.paragraph_9')</li>
                                <li>@lang('cookie.paragraph_10')</li>
                                <li>@lang('cookie.paragraph_11')</li>
                                <li>@lang('cookie.paragraph_12')</li>
                                <li>@lang('cookie.paragraph_13')</li>
                                <li>@lang('cookie.paragraph_14')</li>
                            </ul>
                            <p><b>@lang('cookie.paragraph_15')</b></p>
                            <p>@lang('cookie.paragraph_16')</p>
                            <p>@lang('cookie.paragraph_17')</p>
                            <p>@lang('cookie.paragraph_18')</p>
                            <p>Agimo IVS <br>
                                Porsvej 2 <br>
                                9000 Aalborg <br>
                                Denmark <br>
                                +45 93 92 88 11 <br>
                                info@agimo.dk
                            </p>

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

