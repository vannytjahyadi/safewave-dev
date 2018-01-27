@extends('layouts.app-without-header')

@section('pageTitle', 'Welcome to Safewave')

@section('content')
    <div class="container-fluid home-page">
        <div class="wrapper center">
            <div class="row">
                <div class="col-xs-12">
                    <img src="{{ asset('assets/img/logo/main-white.svg') }}" alt="safewave-logo" class="logo"/>
                    <p class="slogan">
                        Your Iot Security Solutions is Coming In March 2018
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="contact">
                        Contact us :<br/>
                        <a href="mailto:info@safewave.io">info@safewave.io</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="contact">
                        Join us :<br/>
                        <a href="mailto:career@safewave.io">career@safewave.io</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
