@extends('layouts.login-layout')
@section('title' , 'Microlent Property')

@section('auth-content')
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>
              <div class="card-body">
                @if (Session::has('error'))
                    @include('includes.form-error')
                @endif

                @if (Session::has('success'))
                    @include('includes.form-success')
                @endif 

                <form  action="{{ route('forgot.password.update')  }}" method="post">
                    {{  csrf_field() }}
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback" >
                      <strong>{{ $message }}</strong>
                    </div>
                   @enderror
                 </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Continue
                    </button>
                  </div>
                </form>
              </div>
@endsection               