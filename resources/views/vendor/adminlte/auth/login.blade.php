<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Crystal</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

    <div class="main">

<section class="sign-in">
            <div class="container">

                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin.jpg" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Registrar Cuenta</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Iniciar sesion</h2>

                        <form method="POST" class="register-form" id="login-form" action="{{ $login_url }}" > 
                        @csrf
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_email" class="@error('email') is-invalid @enderror"
                              value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror"
                              placeholder="{{ __('adminlte::adminlte.password') }}">



                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>

                            
                            <div class="form-group">
                                <div>
                                    <input type="checkbox" name="remember-me" id="remember" class="agree-term" {{ old('remember') ? 'checked' : '' }} />
                                
                                    <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                                    </label>   
                                </div>
                                <div class="form-group form-button">
                                    <button type="submit" name="signin" id="signin" class=" form-submit btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                        <span class="fas fa-sign-in-alt"></span><span><span></span></span>
                                        {{ __('adminlte::adminlte.sign_in') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>


                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <!--<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>-->
                                <li><a href="{{ url('/auth/redirect') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>