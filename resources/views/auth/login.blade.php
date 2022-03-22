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
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #2d3035;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
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
    margin-top: 15%;
    margin-bottom: 5%;
    width: 50%;
   /* -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;*/
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
    background: #0062cc;
    color: #fff;
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
                    <div class="col-lg-3  col-12 register-left">
                        <img class="logo" src="{{asset('Layer 1.png')}}" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="{{url('register')}}">
                        <input type="submit" name="" value="Register"/><br/></a>
                    </div>
                    <div class="col-lg-9 col-12 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <form method="POST" action="{{ route('login') }}">
                              @csrf
                                <h3 class="register-heading">Login </h3>
                                <div class="row register-form">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <input type="submit" class="btnRegister"  value="Login"/>
                                    </div>
                                </div>
                              </form>  
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>