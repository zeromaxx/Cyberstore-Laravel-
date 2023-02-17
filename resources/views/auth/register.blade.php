@section('title')
    {{ 'Register' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="center-section">
    <form action="{{ route('submit_register') }}" method="POST" class="register-form">
        {{ csrf_field() }}
        <h2>Register</h2>
        <label for="username" class="control-label col-md-2">Username</label>
        <input type="text" class="form-control" name="username">
        <label for="password" class="control-label col-md-2">Password</label>
        <input type="password" class="form-control" name="password">
        <label for="email" class="control-label col-md-2">Email</label>
        <input type="email" class="form-control" name="email">
        <input type="submit" value="Register" class="btn btn-default" />
        <a href="{{ route('login') }}">Already have an Account?</a>
        @if ($errors->any())
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="list-error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="">{{ session('success') }}</div>
        @endif
    </form>
</div>
@include('includes.footer')
