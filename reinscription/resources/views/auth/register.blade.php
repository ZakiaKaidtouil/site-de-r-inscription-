@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="enter votre nom" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('CNE') ? ' has-error' : '' }}">
                            <label for="CNE" class="col-md-4 control-label">CNE</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="CNE" value="{{ old('CNE') }}" required>

                                @if ($errors->has('CNE'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CNE') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date_de_naissance</label>

                            <div class="col-md-6">
                                <input  type="date" class="datepicker" name="Date_de_nassance" value="{{ old('date') }}" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">mot_de_passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation de mot_de_passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <p>
                        <div class="col s2 push-s2 ">
                            Filiere:
                        </div>

                        <div class="col s3 push-s3">
                            <label>
                                <input class="with-gap" name="F1" type="radio"  />
                                <span>GI</span>



                            </label>
                        </div>
                        </p>
                        <p>
                        <div class="col s3 push-s3">
                            <label>
                                <input class="with-gap" name="F1" type="radio" />
                                <span>TM</span>
                            </label>
                        </div>
                        </p>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span class="text-uppercase text-white">Category 1</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link item</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link item</a>
                                            </li>
                                        </ul>
                                    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    valider
                                </button>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
