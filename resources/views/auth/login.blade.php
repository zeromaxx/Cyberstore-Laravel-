@section('title')
    {{ 'Login' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="center-section" style="flex-direction:column">
    <form class="login-form" style="margin: 0;" method="POST" action="{{ route('submit_login') }}">
        {{ csrf_field() }}
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <div class="login-form-remember-me">
            <div style="display:flex;flex-direction:column;justify-content:flex-start;">
                <input style="margin-top:0.5rem;width:15rem;" type="submit" value="Log In" class="btn btn-default" />
            </div>
        </div>
        <a href="{{ route('register') }}">Don't have an Account?</a>
        <div>
        </div>
        @if (session()->has('error'))
            <p class="list-error">{{ session('error') }}</p>
        @endif
    </form>
    <form style="width: 40%;margin-top:1rem" action="{{ route('quick.login') }}" method="post">
        @csrf
        <input type="hidden" name="username" value="guestAccount">
        <input type="hidden" name="password" value="guestAccount">
        <button class="admin-login-btn" type="submit">Try with a Guest Account</button>
    </form>

</div>
@include('includes.footer')
