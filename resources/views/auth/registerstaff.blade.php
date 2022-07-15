@extends('layouts.app')
@section('content')
    <div class="main-wrapper">
        <div class="account-content">
            <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Apply Job</a>
            <div class="container">
                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="index.html"><img src="{{ URL::to('assets/img/logo2.png') }}" alt="SoengSouy"></a>
                </div>
                <!-- /Account Logo -->
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Register Staff</h3>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
                        <!-- Account Form -->
                        <form method="POST" action="{{ route('registerstaff') }}">
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter Your Phone Number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- insert defaults --}}
                            <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                            <div class="form-group">
                                <label class="col-form-label">Role</label>
                                <select class="select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                    <option selected disabled>-- Select Role --</option>
                                    @foreach ($role as $name)
                                        <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                                    @endforeach
                                </select>
                                @error('role_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Speciality</label>
                                <label class="col-form-label"><small>*for doctor</small></label>
                                <select class="select @error('position') is-invalid @enderror" name="position" id="position" disabled>
                                    <option selected disabled>-- Select Speciality --</option>
                                    @foreach ($position as $pos)
                                        <option value="{{ $pos->position }}">{{ $pos->position }}</option>
                                    @endforeach
                                </select>
                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>Repeat Password</strong></label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Register</button>
                            </div>
                            <div class="account-footer">
                                <p>Already have an account? <a href="{{ route('loginstaff') }}">Login</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>


document.getElementById("role_name").onchange = function () {

  if (this.value == 'Dokter')
    {
        document.getElementById("position").removeAttribute("disabled");
    }
    else 
    {
        document.getElementById("position").setAttribute("disabled", "disabled");
        document.getElementById("position").value = "";
        //selected value = ""


    }
   
};
</script>
@endsection
