@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <!-- Default form login -->
                    <form class="text-center border border-light p-5" method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="h4 mb-4">Sign in asdasdasd2</p>

                        <!-- Email -->
                        <div>
                            <input type="email" id="email" class="mb-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- Password -->
                        <div>
                            <input id="password" type="password" class="mb-4 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif

                        </div>

                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-info btn-block my-4 text-white" type="submit">Sign in</button>

                        <p>For inquiries contact the administrator:</p>
                            <a href="#">dasdasdas.mo</a>
                        

                    </form>
                    <!-- Default form login -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
