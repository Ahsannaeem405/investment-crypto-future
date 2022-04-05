@extends('user.layout.main')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Withdraw</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('user/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Withdraw</li>
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
                                    <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Withdraw</strong>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" action="{{url('user/withdraw_saved')}}" id="Myform">
                                            @csrf
                                            <div class="form-group">
                                                <label>Select Currency</label>
                                                <select name="address" class="address form-control mb-3 mb-3">
                                                   
                                                    <option value="{{Auth()->user()->bitcoin}},{{Auth()->user()->bitcoin_file}},1">Bitcoin</option>
                                                    <option value="{{Auth()->user()->eth}},{{Auth()->user()->eth_file}},2">Ethereum</option>
                                                    <option value="{{Auth()->user()->usdt}},{{Auth()->user()->usdt_file}},3">USDT</option>
                                                    <option value="{{Auth()->user()->bnb}},{{Auth()->user()->bnb_file}},4">BNB</option>
                                                    <option value="{{Auth()->user()->shi}},{{Auth()->user()->shi_file}},5">Shiba Inu</option>
                                                    <option value="{{Auth()->user()->ada}},{{Auth()->user()->ada_file}},6">WBTC</option>

                                                  
                                                </select>

                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" placeholder="" class="amount form-control" name="amount" value="" required>
                                                <input type="hidden" placeholder="" class="c_id form-control" name="c_id" value="">
                                            </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                        <button type="button" class="btn btn-primary send">Save changes</button>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($witdr as $witdr_row)

                                    <tr>
                                        <th scope="row">1</th>

                                        <td>{{$witdr_row->amount}}</td>
                                        

                                         <td>{{$witdr_row->get_curreny->name}}</td>

                                        <td>
                                        @if($witdr_row->status==null)
                                        Pending
                                        @else{{$witdr_row->status}}
                                        @endif
                                        </td>
                                        <td>
                                        {{$witdr_row->created_at->format('Y-m-d')}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".send").click(function() {
            var data = $(".address").val();
            var amount = $(".amount").val();
            
            var user_amount = {{$all}};
            
            const new_data = data.split(",");

            $(".c_id").val(new_data[2]);
            if((new_data[0]==null || new_data[0]=="") && (new_data[1]==null || new_data[1]==""))
            {
                alert('Please Add Your Wallet Address or Qr Code For This Currency');
                

            }
            else{
                if(amount > user_amount)
                {
                    alert('You have insufficient balance');
                   
                }
                else{
                    if(amount==null || amount=="")
                    {
                    alert('Please Enter Amount');

                    }
                    else
                    {
                     $("#Myform").submit();   
                    }
                    

                }
            }
            
            
            

        });
    });
</script>