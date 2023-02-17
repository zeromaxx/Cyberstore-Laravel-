@section('title')
    {{ 'Login' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="center-section">
    <form class="login-form" method="POST" action="{{ route('submit_login') }}">
        {{ csrf_field() }}
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <div class="login-form-remember-me">
            <div style="display:flex;flex-direction:column;justify-content:flex-start;">
                {{-- <button class="admin-login-btn" id="admin-login">Try with a guest account</button> --}}
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
</div>
@include('includes.footer')

{{-- <script src="~/Scripts/Navbar Toggle.js"></script>
    <script src="~/Scripts/LiveSearch.js"></script>
    <script>
        $('#admin-login').click(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "/User/Login",
                data: { Username: 'admin', Password: 'admin1!' },
                success: function (data) {
                    window.location.href = "/Home/Index";
                },
                fail: function () {
                }
            });
        })

    </script> --}}
