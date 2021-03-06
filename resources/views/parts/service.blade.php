@extends('layouts.app')

@section('title', __('main.terms_of_service'))

@section('content')

    <!-- Alerts - OPEN -->
    @include('parts.alerts')
    <!-- Alerts - CLOSE -->

    <!-- Content - OPEN -->
    <div class="container margin-top padding-bottom">

        <h1>
            {{ __('main.terms_of_service') }}
        </h1>

        <h3 class="margin-top">
            {{ __('main.security_measures') }}
        </h3>
        <p>
            {{ __('main.security_measures_detail') }}
        </p>

        <h3 class="margin-top">
            {{ __('main.terms_modifications') }}
        </h3>
        <p>
            {{ __('main.terms_modifications_detail') }}
        </p>

        <h3 class="margin-top">
            {{ __('main.terms_jurisdiction') }}
        </h3>
        <p>
            {{ __('main.terms_jurisdiction_detail') }}
        </p>

    </div>
    <!-- Content - CLOSE -->

@endsection('content')
