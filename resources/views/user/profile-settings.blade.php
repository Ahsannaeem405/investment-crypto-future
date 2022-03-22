@extends('user.layout.main')
@section('content')
<div class="page-content">
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('user/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Profile Settings</li>
        </ul>
    </div>
    {{-- <div class="page-header d-flex">

        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="profile" style="color: #db6574;"><a href="{{route('admin.profile-settings')}}" style="text-decoration: none";>Profile Settings</a></h2>
        </div>
        <div class="ml-2 d-flex">

            <h2 class="h5 no-margin-bottom ml-2" id="settings"><a href="{{route('admin.settings')}}" style="text-decoration: none";>Settings</a> </h2>
        </div>
    </div> --}}

    <section class="no-padding-top" >
        <div class="container-fluid">
        @if (session()->has('success'))

<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
            <div class="row">
                <!-- Horizontal Form-->
                <div class="col-lg-4" id="profile-settings">
                    <div class="block">
                        <div class="block-body">
                            <nav id="sidebar" style="border-right: 0px;width: auto;">
      
                              <ul class="list-unstyled">
                                <li class="active"><a href="{{route('user.profile-settings')}}"> <i class="fa fa-user"></i>Profile Settings</a></li>
                                <li class=""><a href="{{route('user.settings')}}"> <i class="fa fa-unlock"></i>Change Password</a></li>
                                
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" id="profile-settings">
                    <div class="block">
                        <div class="title"><strong class="d-block">Update Information</strong></div>
                        <div class="block-body">
                            <form class="form-horizontal" method="post" action="{{route('user.update_information')}}"  enctype='multipart/form-data'>
                                @csrf
                                <input id="inputHorizontalSuccess" type="hidden" value="{{Auth()->user()->id}}" placeholder="e.g John" class="form-control form-control-success" name="admin_id">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">First Name</label>   
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text"  value="{{Auth()->user()->first_name}}" placeholder="e.g John" class="form-control form-control-success" name="first_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Last Name </label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalWarning" type="text" value="{{Auth()->user()->last_name}}"  placeholder="e.g Smith" class="form-control form-control-warning" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="email" value="{{Auth()->user()->email}}"  placeholder="Email Address" class="form-control form-control-success" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Refer Code</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="email" value="{{Auth()->user()->code}}"  placeholder="Email Address" class="form-control form-control-success"  readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" >Image</label>
                                    <div class="col-sm-9">

                                        <input class="form-control" type="file" id="formFileDisabled" name="image" style="height: 47px;" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Bitcoin</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->bitcoin}}"  placeholder="Bitcoin Address" class="form-control form-control-success" name="bitcoin" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Ethereum</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->eth}}"  placeholder="Ethereum Address" class="form-control form-control-success" name="eth" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">USDT</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->usdt}}"  placeholder="USDT Address" class="form-control form-control-success" name="usdt" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">BNB</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->bnb}}"  placeholder="BNB Address" class="form-control form-control-success" name="bnb" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Shiba Inu</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->shi}}"  placeholder="Shiba Inu Address" class="form-control form-control-success" name="shi">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">ADA</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" value="{{Auth()->user()->ada}}"  placeholder="ADA Address" class="form-control form-control-success" name="ada">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Bitcoin QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="BNB Address" class="form-control form-control-success" name="bitcoin_file" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">BNB QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="Shiba Inu Address" class="form-control form-control-success" name="bnb_file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Ethereum QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="Ethereum Address" class="form-control form-control-success" name="eth_file" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">USDT QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="USDT Address" class="form-control form-control-success" name="usdt_file" >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Shiba Inu QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="Shiba Inu Address" class="form-control form-control-success" name="shi_file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">ADA QR</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="file"   placeholder="Shiba Inu Address" class="form-control form-control-success" name="ada_file">
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