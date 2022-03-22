@extends('admin.layout.main')
@section('content')
<div class="page-content">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Password Settings</li>
        </ul>
    </div>
    {{-- <div class="page-header d-flex">
        <div class="ml-2 d-flex">
            <h2 class="h5 no-margin-bottom ml-2" id="profile" style="color: #db6574;"><a href="{{route('admin.profile-settings')}}" style="text-decoration: none" ;>Profile Settings</a></h2>
        </div>
        <div class="ml-2 d-flex">
            <h2 class="h5 no-margin-bottom ml-2" id="settings"><a href="{{route('admin.settings')}}" style="text-decoration: none;">Settings</a> </h2>
        </div>
    </div> --}}

    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                    @if (session()->has('success'))
                        <div class="col-lg-12" id="profile-settings">
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="col-lg-12" id="profile-settings">
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    </div>    
                    @endif
                    @if ($errors->any())
                        <div class="col-lg-12" id="profile-settings">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                <div class="col-lg-4" id="profile-settings">
                    <div class="block">
                        <div class="block-body">
                            <nav id="sidebar" style="border-right: 0px;width: auto;margin-left:-17px">
      
                              <ul class="list-unstyled">
                                <li class=""><a href="{{route('admin.profile-settings')}}"> <i class="fa fa-user"></i>Profile Settings</a></li>
                                <li class="active"><a href="{{route('admin.settings')}}"> <i class="fa fa-unlock"></i>Change Password</a></li>
                                <li class=""><a href="{{route('admin.referral-profit')}}"> <i class="fa fa-dollar"></i>Referral Profit </a></li>
                                
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" id="profile-settings">
                    <div class="block">
                        <div class="title"><strong class="d-block">Update Password </strong></div>
                        <div class="block-body">
                            <form class="form-horizontal" method="post" action="{{route('admins.change_password')}}">

                                @csrf
                                <input id="inputHorizontalSuccess" type="hidden" value="{{Auth()->user()->id}}" placeholder="e.g John" class="form-control form-control-success" name="admin_id">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Current Password </label>
                                    <div class="col-sm-9">
                                        <input id="" type="password" placeholder="Current Pasword" class="form-control form-control-warning" name="Current_Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">New Password </label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalWarning" type="password" placeholder="New Pasword" class="form-control  @error('password') is-invalid @enderror form-control-warning" name="New_Password" required>
                                    
                                    </div>
                                    
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Confirm Password </label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalWarning" type="password" placeholder="Confirm Pasword" class="form-control  @error('Confirm_Password') is-invalid @enderror form-control-warning" name="Confirm_Password" required>
                                        
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
            $('#profile').css('color', '#db6574');
            $('#settings').css('color', '');
        });
        $("#settings").click(function() {
            $('#settings').css('color', '#db6574');
            $('#profile').css('color', '');

        });

    });
</script>
@endsection