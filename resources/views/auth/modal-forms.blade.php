<div class="login-section w-100">
    @include('auth.login-form',['mode'=>'ajax'])
    @include('auth.social-login-box')
</div>

<div class="register-section w-100 d-none">
    @include('auth.register-form',['mode'=>'ajax'])
    @include('auth.social-login-box')
</div>

<div class="forgot-section w-100 d-none">
    @include('auth.passwords.email-form',['mode'=>'ajax'])
</div>
