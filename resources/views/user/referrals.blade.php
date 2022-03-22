


@extends('user.layout.main')
@section('content')
  <div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">My Referrals</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
        <li class="breadcrumb-item active">Referral</li>
      </ul>
    </div>
    <section class="no-padding-top">
      <div class="container-fluid">
        <div class="row">

          
          <div class="col-lg-12">
            <div class="block margin-bottom-sm">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if (session()->has('success'))

                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
              @endif
              
              <div class="table-responsive"> 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Referal Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                    {{--   <th>Email</th>
                      <th>Deposit History</th> --}}
                    </tr>
                  </thead>
                  <tbody>
               @foreach($data as $item)
                      <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->first_name}}</td>
                        <td>{{$item->last_name}}</td>
                        {{-- <td>{{$item->email}}</td>
                        <td><a href="{{url('user/see-profits/'.$item->id.'')}}" class="btn btn-primary">See Profit</a></td> --}}
                      </tr>
                    @endforeach
                  
                   
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
  </div>
@endsection  