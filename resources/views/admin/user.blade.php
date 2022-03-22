@extends('admin.layout.main')
@section('content')
  <div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">User</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
        <li class="breadcrumb-item active">User</li>
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
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $p=0; @endphp
                    @foreach($data as $row)
                    @php $p++; @endphp
                      <tr>
                        <th scope="row">{{$p}}</th>
                        <td>{{$row->first_name}}</td>
                        <td>{{$row->last_name}}</td>
                        <td>{{$row->email}}</td>
                       <td><i class="fa fa-edit" data-toggle="modal" data-target="#myModal{{$p}}" style="font-size:20px;color:red;"></i>


                            <a href="{{url('admins/delete/' .$row->id)}}" onclick="return confirm('Are You Sure?');">
                            <i class="fa fa-trash" aria-hidden="true" style="font-size:20px;color:red;"></i>

                            </a>
                        </td>
                      </tr>
                    
                  
                    <div id="myModal{{$p}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">User</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            
                            <form method="post" action="{{url('admins/update_user')}}">
                              @csrf
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text"  class="form-control" name="first_name" value="{{$row->first_name}}">
                                <input type="hidden"  class="form-control" name="id" value="{{$row->id}}">
                              </div>
                              <div class="form-group">       
                                <label>Last Name</label>
                                <input type="text" placeholder="" class="form-control" name="last_name" value="{{$row->last_name}}">
                              </div>
                               <div class="form-group">       
                                <label>Email</label>
                                <input type="text" placeholder="" class="form-control" name="email" value="{{$row->email}}">
                              </div>
                              
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
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