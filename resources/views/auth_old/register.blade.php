<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body{
        background-color: #22252a;
    }
  .register{
   background: linear-gradient(to left, #483a17 0%, black 100%);
    margin-top: 7%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #d3b755;
    font-weight: bold;
    color: white;
   
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
     margin-top: 5%;
}
@media screen and (max-width: 786px) {
  .register-left input {
    margin-top: 2%;
  }
  h3{
     margin-top: 5%;

  }
  .register-right {
    
    border-top-left-radius: 0% 0%!important;
    border-bottom-left-radius: 0% 0%!important;
  }
  .register-left img{

    width: 50%!important;
    margin-top: 0%!important;
    margin-bottom: 0%!important;
  }
  .register-left p {
    
    padding: 0%!important;
    margin-top: 0%!important; 
  }
  .container{
    max-width: 472px!important;
  }
  .row{
    margin-left: 0px!important;
    margin-right: 0px!important;
  }

}
@media screen and (max-width: 486px) {
  
  .container{
    max-width: 372px!important;
  }

}
@media screen and (max-width: 400px) {
  
  .container{
    max-width: 352px!important;
  }

}
.register-left img{
/*    margin-top: 15%;
*/    /*margin-bottom: 5%;*/
    width: 50%;
   
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #d3b755;
    color: white;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color:white;
}
</style>
<div class="container register">
                <div class="row">
                    <div class="col-lg-5  col-12 register-left">
                        <img class="logo" src="{{asset('1.png')}}" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="{{url('login')}}">
                        <input type="submit" name="" value="Login"/><br/></a>
                    </div>
                    <div class="col-lg-7  col-12 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                          <form method="POST" action="{{ route('register') }}">
                          @csrf
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('name') }}" required autocomplete="first_name" autofocus placeholder="First Name *" name="first_name">

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>First Name Is Required</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" value="" name="last_name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">    
                                        <div class="form-group">
                                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email *">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">     
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone" value="" name="phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">     
                                        <div class="form-group">
                                            
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password *">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">     
                                        <div class="form-group">
                                            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password *" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">     
                                        <div class="form-group">
                                            
                                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code"  autocomplete="code" placeholder="Referral Code ">

                                         
                                        </div>
                                        
                                    </div>

                                    
                                   
                                    <div class="col-md-9 offset-md-3" style="">
                                        
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                          </form>
                            
                        </div>
                    </div>
                </div>

            </div>