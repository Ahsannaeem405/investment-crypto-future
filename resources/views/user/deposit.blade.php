@extends('user.layout.main')
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
        <li class="breadcrumb-item"><a href="{{url('user/index')}}">Home</a></li>
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
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Deposit</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            
                            <form method="post" action="{{url('user/add_deposit')}}"  enctype='multipart/form-data'>
                              @csrf
                              <div class="form-group">
                                <label>Select Currency</label>
                                <select name="address" class="address form-control mb-3 mb-3">
                                  
                                  <option value="{{$user->bitcoin}},{{$data[0]->id}},{{$user->bitcoin_file}},{{ url('/') }}">{{$data[0]->name}}</option>
                                  <option value="{{$user->eth}},{{$data[1]->id}},{{$user->eth_file}},{{ url('/') }}">{{$data[1]->name}}</option>
                                  <option value="{{$user->usdt}},{{$data[2]->id}},{{$user->usdt_file}},{{ url('/') }}">{{$data[2]->name}}</option>
                                  <option value="{{$user->bnb}},{{$data[3]->id}},{{$user->bnb_file}},{{ url('/') }}">{{$data[3]->name}}</option>
                                  <option value="{{$user->shi}},{{$data[4]->id}},{{$user->shi_file}},{{ url('/') }}">{{$data[4]->name}}</option>
                                  <option value="{{$user->ada}},{{$data[5]->id}},{{$user->ada_file}},{{ url('/') }}">{{$data[5]->name}}</option>
                                  

                                 
                                </select>
                                
                              </div>
                              <div class="form-group">       
                                <label>Wallet Address</label>
                                <input type="text" placeholder="" class="form-control wallet" name="wallet" value="{{$user->bitcoin}}" readonly>
                                <input type="hidden" placeholder="" class="form-control c_id" name="c_id" value="{{$data[0]->id}}" readonly>
                                
                              </div>
                               <div class="form-group">       
                                <label>Qr Code</label>
                                
                                <img class="imgg" src="{{asset('upload/images/'.$user->bitcoin_file)}}">
                                
                              </div>
                               <div class="form-group">       
                                <label>Amount</label>
                                <input type="number" placeholder="" class="form-control" name="amount" value=""  >
                              </div>
                               <div class="form-group">       
                                <label>Upload Receipt</label>
                                <input type="file" placeholder="" class="form-control" name="image" value=""   required>
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
                    <i class="fa fa-plus" data-toggle="modal" data-target="#myModal" style="font-size:20px;color:red;float: right;"></i>
              
              <div class="table-responsive"> 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Amount</th>
                      <th>Currency</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Payment</th>
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
                          @else{{$row_amount->status}}
                          @endif
                        </td>
                        <td>
                          {{$row_amount->created_at->format('Y-m-d')}}
                        </td>
                        <td></td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   
    $(".address").change(function(){
      var data=$(this).val();
      const new_data = data.split(",");
      var url=new_data[3]+"/upload/images/"+new_data[2];
     
      $(".wallet").val(new_data[0]);
      $(".c_id").val(new_data[1]);
       $(".imgg").attr("src",url);
    
  });
});
</script> 