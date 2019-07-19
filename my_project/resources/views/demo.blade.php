@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Congratulation! Please, complete your profile.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!                </div>
<!            </div>
 <!       </div>
 <!   </div>

<!  pop up box starts from here >
 <div class="row justify-content-center">
        <div class="col-md-8">
          <!  <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 col-form-label text-md-right">{{ Auth::user()->name }}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Website Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="www.******.***">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="numberofemployee" class="col-md-4 col-form-label text-md-right">{{ __('Number of Employee') }}</label>

                            <div class="col-md-6">
                                <input id="numberofemployee" type="text" class="form-control @error('numberofemployee') is-invalid @enderror" name="numberofemployee" value="{{ old('numberofemployee') }}" required autocomplete="numberofemployee" autofocus>
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="yearofestablishment" class="col-md-4 col-form-label text-md-right">{{ __('Year Of Establishment') }}</label>

                            <div class="col-md-6">
                                <input id="yearofestablishment" type="text" class="form-control @error('yearofestablishment') is-invalid @enderror" name="yearofestablishment" value="{{ old('yearofestablishment') }}" required autocomplete="yearofestablishment" autofocus>
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="personalemail" class="col-md-4 col-form-label text-md-right">{{ __('Personal Email') }}</label>

                            <div class="col-md-6 col-form-label text-md-right">{{ Auth::user()->email }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  <!    </div>

    </div>
	<button type="submit" class="btn btn-primary">{{ __('Submit Profile') }}</button>
   </div>
  </div>
 </div>
</div>
@endsection
