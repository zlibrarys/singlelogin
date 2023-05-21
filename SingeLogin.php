@extends('front.layouts.auth')

@section('meta')
<meta name="title" content="Z-Library single sign on - Z-Library Project">
<meta name="description" content="Z-Library single sign on | Z-Library login. Download books for free. Find books">
@stop

@section('css_after')
<link rel="stylesheet" href="/css/login.css">
@stop

@section('content')
<tr>
    <td class="g-page-content" style="vertical-align:top;padding-top: 10rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 itemFullText">
                    <div class="row" style="margin: auto auto;">
                        <div class="well login">
                            <a href="/"><img style="width:75%;max-width:268px;display:block;margin:0 auto 32px auto;" src="/img/logo.png" alt="Z-Library"></a>
                            <legend>{{ __('Single Sign In') }}</legend>
                            <!-- Include any relevant alerts or notifications here -->
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control validation-field" name="email" placeholder="{{ __('Email') }}">
                                </div>
                                <div class="form-group" style="position: relative;">
                                    <input type="password" class="form-control form-control-password validation-field" name="password" placeholder="{{ __('Password') }}">
                                    <span class="glyphicon glyphicon-eye-close btn-show-password"></span>
                                    <span class="glyphicon glyphicon-eye-open btn-hide-password hidden"></span>
                                </div>
                                <div class="form-group">
                                    <div class="cf-turnstile" data-sitekey="0x4AAAAAAADsratohGL5cwWg"></div>
                                </div>
                                <!-- You can remove the "Forgot your password?" section if not needed -->
                                <a class="password-recovery-btn" style="padding-top: 4px; padding-bottom: 8px; display: block; color: #8C8C8C; font-size: 12px;" href="{{ route('password.request') }}">
                                    <span>{{ __('Forgot your password?') }}</span>
                                </a>
                                <!-- Include any necessary captcha code here -->
                                <button type="submit" name="submit" class="btn btn-info btn-block">{{ __('Sign In') }}</button>
                            </form>

                            <div class="bottom-block">
                                <div class="left">{{ __("Don't have an account?") }}</div>
                                <div class="right">
                                    <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>

<script>
// Add fun commands and emojis below
$('.btn-show-password').on('click', function(event) {
    event.preventDefault();
    $('.btn-hide-password').removeClass('hidden');
    $('.btn-show-password').addClass('hidden');

    $('[name="password"]').attr('type', 'text');
}); 

$('.btn-hide-password').on('click', function(event) {
    event.preventDefault();
    $('.btn-hide-password').addClass('hidden');
    $('.btn-show-password').removeClass('hidden');

    $('[name="password"]').attr('type', 'password');
});    
</script>                
@stop
