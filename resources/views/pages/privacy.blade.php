{{--MASTER FILE--}}
@extends('layouts.master')

{{--PAGE LANGUAGE--}}
@section('language.php', 'en')

{{--PAGE TITLE--}}
@section('title', 'Agimo / GDPR Privacy Center - Privacy Policy')

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
        @lang('privacy.page_title')
    @endsection

    {{--SUBPAGE DESCRIPTION--}}
    @section('subpage-description')
        @lang('privacy.page_description')
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
                            <h2>@lang('privacy.sub_title')</h2>
                            <br>
                            <p>@lang('privacy.paragraph_1')</p>
                            <p>@lang('privacy.paragraph_2')</p>
                            <p><b>@lang('privacy.paragraph_3')</b></p>
                            <p>@lang('privacy.paragraph_4')</p>
                            <p><b>@lang('privacy.paragraph_5')</b></p>
                            <p>@lang('privacy.paragraph_6')</p>
                            <p>@lang('privacy.paragraph_7')</p>
                            <p>@lang('privacy.paragraph_8')</p>
                            <p><b>@lang('privacy.paragraph_9')</b></p>
                            <p>@lang('privacy.paragraph_10')</p>
                            <p>@lang('privacy.paragraph_11')</p>
                            <p><b>@lang('privacy.paragraph_12')</b></p>
                            <p>@lang('privacy.paragraph_13')</p>
                            <p><b>@lang('privacy.paragraph_14')</b></p>
                            <p>@lang('privacy.paragraph_15')</p>
                            <p>@lang('privacy.paragraph_16')</p>
                            <p><b>@lang('privacy.paragraph_17')</b></p>
                            <p>@lang('privacy.paragraph_18')</p>
                            <p>@lang('privacy.paragraph_19')</p>
                            <p>@lang('privacy.paragraph_20')</p>
                            <p>@lang('privacy.paragraph_21')</p>
                            <p>@lang('privacy.paragraph_22')</p>
                            <p>@lang('privacy.paragraph_23')</p>

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

