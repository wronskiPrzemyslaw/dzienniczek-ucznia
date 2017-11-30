@extends('layouts.app')

@section('content')
<section id="login" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Formularz logowania</h4>
                    </div>
                    <div class="card-block">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-control-label">Hasło</label>
                                <input type="password" id="password" class="form-control"  name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button class="btn btn-primary btn-block mb-3">Zaloguj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
