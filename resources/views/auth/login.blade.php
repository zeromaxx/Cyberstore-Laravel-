@section('title')
    {{ 'Login' }}
@endsection

@include('includes.header')
@include('includes.navbar')

<div class="wallpaper-container">
    <img src="{{ asset('img/banner.jpg') }}" alt="wallpaper">
    <div class="wallpaper-heading">
        <h1>Shop</h1>
        <h5>Home/Account</h5>
    </div>
</div>

<div class="login-form">
    <h2>Login</h2>
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <label for="">Password</label>
    <input type="text" name="password" id="">
    <div class="login-form-remember-me">
        <div style="display:flex;flex-direction:column;justify-content:flex-start;">
            {{-- <button class="admin-login-btn" id="admin-login">Try with a guest account</button> --}}
            <input style="margin-top:0.5rem;width:15rem;" type="submit" value="Log In" class="btn btn-default" />
        </div>
    </div>
    <a href="#">Don't have an Account?</a>
    <div>
    </div>

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
