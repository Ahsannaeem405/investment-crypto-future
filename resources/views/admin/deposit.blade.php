@extends('admin.layout.main')
@section('content')
  <div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Deposit</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
        <li class="breadcrumb-item active">Deposit</li>
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
                      <th>Amount</th>
                      <th>Currency</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Receipt</th>
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
                        <td><img src="{{asset('upload/images/'.$row_amount->image)}}" alt="..." class="img-fluid " width="40">
                          <a href="{{asset('upload/images/'.$row_amount->image)}}">{{asset('upload/images/'.$row_amount->image)}}</a>
                        </td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#myModal{{$p}}">
                          <i class="fa fa-check" aria-hidden="true" style="font-size:20px;color:green;" data-toggle="tooltip" title="Approve"></i>
                          <a href="{{url('admins/reject/' .$row_amount->id)}}">  
                            <i class="fa fa-times" aria-hidden="true" style="font-size:20px;color:red;" data-toggle="tooltip" title="Reject"></i>

                        </td>
                      </tr>
                       <div id="myModal{{$p}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Deposit</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            
                            <form method="post" action="{{url('admins/approve/' .$row_amount->amount.'/'.$row_amount->c_id.'/'.$row_amount->user_id.'/'.$row_amount->id)}}"  enctype='multipart/form-data'>
                              @csrf
                              <div class="form-group">
                               
                                
                              </div>
                             
                              <div class="form-group">       
                                <label>Amount</label>
                                <input type="number" placeholder="" class="form-control" name="send_amount" value=""  >
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   
    $(".address").change(function(){
      var data=$(this).val();
      const new_data = data.split(",");
      $(".wallet").val(new_data[0]);
      $(".c_id").val(new_data[1]);
    
  });
});
</script> 
