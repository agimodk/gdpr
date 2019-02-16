{{--MASTER FILE--}}
@extends('layouts.master')

{{--PAGE LANGUAGE--}}
@section('language.php', 'en')

{{--PAGE TITLE--}}
@section('title', 'YOU / GDPR Privacy Center - Rectification')

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
    @lang('rectification.page_title')
@endsection

{{--SUBPAGE DESCRIPTION--}}
@section('subpage-description')
    @lang('rectification.page_description')
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
                        <p class="available-actions"><a href="/"><i
                                    class="fas fa-arrow-left"></i>&nbsp;&nbsp;@lang('general.return')</a></p>
                    </div>

                    <div class="col-md-12">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('failure'))
                            <div class="alert alert-danger">
                                {{ session('failure') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <p>@lang('general.correct_errors')</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/rectification" method="post">

                            @csrf

                            <div>
                                <label for="first-name">@lang('general.first_name')</label>
                                <input id="first-name" type="text" name="first-name"
                                       placeholder="@lang('general.insert_first_name')" value="{{ old('first-name') }}"
                                       required>
                            </div>

                            <div>
                                <label for="last-name">@lang('general.last_name')</label>
                                <input id="last-name" type="text" name="last-name"
                                       placeholder="@lang('general.insert_last_name')" value="{{ old('last-name') }}"
                                       required>
                            </div>

                            <div>
                                <label for="email">@lang('general.email')</label>
                                <input id="email" type="text" name="email" placeholder="@lang('general.insert_email')"
                                       value="{{ old('email') }}" required>
                            </div>

                            <div>
                                <label for="phone">@lang('general.phone')</label>
                                <input id="phone" type="text" name="phone" placeholder="@lang('general.insert_phone')"
                                       value="{{ old('phone') }}" required>
                            </div>

                            <div>
                                <label for="message">@lang('general.message')</label>
                                <textarea id="message" name="message" cols="30" rows="10"
                                          placeholder="@lang('general.insert_message')"
                                          required>{{ old('message') }}</textarea>
                            </div>

                            <input type="checkbox" required name="agree">@lang('general.agree')

                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                                <div class="g-recaptcha"
                                     data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"
                                     data-callback="recaptchaCallback">
                                </div>
                            @endif

                            <button class="send-message disabled-button" disabled><i
                                    class="far fa-paper-plane"></i>@lang('general.send_request')</button>

                        </form>
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

