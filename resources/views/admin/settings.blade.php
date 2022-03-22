@extends('admin.layout.main')
@section('content')
<div class="page-content">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ul>
    </div>
    <div class="page-header d-flex">

        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="profile" style="color: #db6574;">Profile Settings</h2>
        </div>
        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="settings">Password Settings </h2>
        </div>
    </div>

    <section class="no-padding-top" >
        <div class="container-fluid">
            <div class="row">
                @if (session()->has('success'))
                 <div class="col-lg-12" id="password-settings" style="display: none;">
                    <div class="block">
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    </div>
                </div>
                @endif
                        @if (session()->has('error'))
                        <div class="col-lg-12" id="password-settings" style="display: none;">
                        <div class="block">
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div></div></div>
                        @endif
                <!-- Horizontal Form-->
                <div class="col-lg-12" id="profile-settings">
                    <div class="block">
                        <div class="title"><strong class="d-block">Update Information </strong></div>
                        <div class="block-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" placeholder="e.g John" class="form-control form-control-success">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Last Name </label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalWarning" type="text" placeholder="e.g Smith" class="form-control form-control-warning">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Image</label>
                                    <div class="col-sm-9">

                                        <input class="form-control" type="file" id="formFileDisabled" style="height: 47px;" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12" id="password-settings" style="display: none;">
                    <div class="block">

                        <div class="title"><strong class="d-block">Update Password </strong></div>
                        <div class="block-body">
                            
                            <form class="form-horizontal" method="post" action="{{ url('admins/change-password')}}" enctype="multipart/form-data">
                            @csrf    


                                <input class="form-control" name="id" placeholder="" type="hidden" value="{{Auth()->user()->id}}">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Current Password </label>
                                    <div class="col-sm-9">
                                       
                                        <input class="form-control" placeholder="" type="password" value="" name="current_password" Required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">New Password </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" placeholder="" id="password" type="password" name="password" onkeyup='check();' Required>
                                    </div>
                                    @error('password')
                                <span class="invalid-feedback"  role="alert" style="display: block;margin-top: -12px;margin-left: 5%;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Confirm Password </label>
                                    <div class="col-sm-9">
                                       <input class="form-control" placeholder="" id="new-password" type="password" name="password_confirmation" onkeyup='check();' Required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#profile").click(function() {
			$('#profile-settings').css('display', 'block');
			$('#password-settings').css('display', 'none');
            $('#profile').css('color', '#db6574');
            $('#settings').css('color', '');
          
		
		});
        $("#settings").click(function() {
			$('#profile-settings').css('display', 'none');
            $('#settings').css('color', '#db6574');
			$('#password-settings').css('display', 'block');
            $('#profile').css('color', '');
       
		});

    });
</script>
@endsection