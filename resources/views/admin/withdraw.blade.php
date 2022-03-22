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
            <li class="breadcrumb-item active">Withdraw</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="table-responsive">
                             <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Amount</th>
                      <th>Currency</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $p=0; @endphp
                    @foreach($amount as $row_amount)
                    @php $p++; @endphp
                      <tr>
                        <th scope="row">{{$p}}</th>
                        
                        <td>{{$row_amount->amount}}</td>
                        <td>{{$row_amount->get_curreny->name}}</td>

                        <td>
                          @if($row_amount->status==null)
                          Pending
                          @endif
                        </td>
                        <td>
                          {{$row_amount->created_at->format('Y-m-d')}}
                        </td>
                        <td>
                          <a href="{{url('admins/witd_approve/' .$row_amount->amount.'/'.$row_amount->c_id.'/'.$row_amount->user_id.'/'.$row_amount->id)}}">
                          <i class="fa fa-check" aria-hidden="true" style="font-size:20px;color:green;" data-toggle="tooltip" title="Approve"></i>
                          <a href="{{url('admins/witd_reject/' .$row_amount->id)}}">  
                            <i class="fa fa-times" aria-hidden="true" style="font-size:20px;color:red;" data-toggle="tooltip" title="Reject"></i>

                        </td>
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