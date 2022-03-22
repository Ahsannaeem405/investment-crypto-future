@extends('user.layout.main')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

<style type="text/css">
  @media screen and (max-width: 786px) {
  td,th {
  font-size:11px!important;
  } 
}
</style>
  <div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom"> Investment Plan(s)</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('user/index')}}">Home</a></li>
        <li class="breadcrumb-item active"> Investment Plan(s)</li>
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
                     
                      <th>PLAN</th>
                      <th>Deposit Required</th>
                      <th>DAILY PROFIT(%)</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   
                      <tr>
                        
                        
                        <td>Bronze</td>
                        <td>$ 250.00</td>
                        <td>2%</td>

                       
                      </tr>
                      <tr>
                        
                        
                        <td>Silver</td>
                        <td>$ 1000.00</td>
                        <td>5%</td>

                       
                      </tr>
                      <tr>
                        
                        
                        <td>Gold</td>
                        <td>$ 10000.00</td>
                        <td>7%</td>

                       
                      </tr>
                      <tr>
                        
                        
                        <td>Platinum</td>
                        <td>$ 30000.00</td>
                        <td>10%</td>

                       
                      </tr>
                       
                    
                  
                    
                   
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

