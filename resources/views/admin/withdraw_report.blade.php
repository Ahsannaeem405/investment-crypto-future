@extends('admin.layout.main')
@section('content')
<style type="text/css">
  .even{
    background: #2d3035!important;
  }
  .dt-button{
    color: white!important;
  }
</style>
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
            <li class="breadcrumb-item"><a href="{{url('admins/index')}}">Home</a></li>
            <li class="breadcrumb-item active">Withdraw Report</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="table-responsive">
                             <table class="table table-striped" id="example">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>User</th>
                                  <th>Amount</th>
                                  <th>Currency</th>
                                  <th>Status</th>
                                  <th>Date</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                @php $p=0; @endphp
                                @foreach($amount as $row_amount)
                                @php $p++; @endphp
                                  <tr>
                                    <th scope="row">{{$p}}</th>
                                    
                                    <td>{{$row_amount->get_user->first_name}} {{$row_amount->get_user->last_name}}</td>
                                    <td>{{$row_amount->amount}}</td>
                                    <td>{{$row_amount->get_curreny->name}}</td>

                                    <td>
                                     {{$row_amount->status}}
                                    </td>
                                    <td>
                                      {{$row_amount->created_at->format('Y-m-d')}}
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
  $(document).ready(function(){
   
    
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
});
</script> 