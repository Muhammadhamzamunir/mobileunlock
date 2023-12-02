@include('common.header',['title'=>'Login'])

<div class="container center-form ">
    <div style="width: 100%" class="mb-3 p-4 shadow">
        <h1 class="mainheading" style="color:var( --pink-color)">Login</h1>

       <div class="row mt-4">
        <div class="col-md-6 p-md-5">
            <form method="POST" action="{{ route('login') }}" class="p-md-3">
                @csrf
    
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
    
    
                <div class="form-group m-2" style="float: right">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                  
                </div>
            </form>
        </div>
        <div class="col-md-6 ">
      <img src="./banner_images/login.png" alt="Login Img" width="100%">
        </div>
       </div>

    </div></div>

@include('common.footer')
