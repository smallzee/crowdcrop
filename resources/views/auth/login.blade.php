@extends('auth.app')

@section('page_title')
    Login
@endsection

@push('content')

    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3 align="center">@yield('page_title')</h3>
                <p>Please enter your login credential</p>
                @error('email')
                <script>
                    $(document).ready(function () {
                        iziToast.error({
                            title: 'Error',
                            message: "{{ $message }}",
                            position: 'topRight',
                        });
                    });
                </script>
                @enderror

                @error('password')
                <script>
                    $(document).ready(function () {
                        iziToast.error({
                            title: 'Error',
                            message: "{{ $message }}",
                            position: 'topRight',
                        });
                    });
                </script>
                @enderror

                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-button">
                        <button id="submit" type="submit" class="ibtn btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

