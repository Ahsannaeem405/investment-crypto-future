<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Deposit;
use App\Models\ProfitHistory;
use App\Models\User;
use App\Models\withdraw;

use App\Models\Stat;
use Carbon\Carbon;



use Auth;




class userController extends Controller
{
    function index()
    {

        $all=Deposit::where('user_id',Auth::user()->id)->sum('amount');
        $user=User::where('id',)->where('role',2)->count();
                $data_k =[];
                $datat =[];
                for($k=7; $k >= 0; $k--) 
                {
                    $month_k =Carbon::today()->subDay($k)->format('Y-m-d');

                    $month_name =Carbon::today()->subDay($k)->format('M d');

                    array_push($datat,$month_name);
                   




                    $respose2 =\Http::get('http://api.coinlayer.com/'.$month_k.'?access_key=5fe2565f6c9ad0ce096587ed2cfd4e57');
                    $data2 = json_decode($respose2->body());
                   
                    if($data2->success!=false)
                    { 
                        $data_k[]=[
                       
                        'data' => $data2->rates,

                    
                        ];

                    }
                    
                }
              

                  $l=0;
                  if($data2->success!=false)
                  {
                      foreach($data_k as $row_data)
                      {
                         $l++;

                        if($l <=7)
                        {

                         $up=Stat::find($l);
                         $up->BTC=$row_data['data']->BTC;
                         $up->BNB=$row_data['data']->BNB;
                         $up->USDT=$row_data['data']->USDT;
                         $up->ETH=$row_data['data']->ETH;
                         $up->ADA=$row_data['data']->ADA;
                         $up->SIB=$row_data['data']->LTC;
                         $up->update();
                        }

                       

                      }
                   } 
                   $label=json_encode($datat);  
                   //dd($label);
                   
        $sat=Stat::all();

        return view('user.index' ,compact('sat','label','all'));
                
    }
    function deposit()
    {
        $data=Currency::all();
        $user=User::find(1);

        $amount=Deposit::where('user_id',Auth::user()->id)->get();
        return view('user.deposit',compact('data','amount','user'));
    }
    function withdraw()
    {
        $data=Currency::all();
        $witdr=withdraw::where('user_id',Auth::user()->id)->get();
        
        return view('user.withdraw',compact('data','witdr'));
    }
    
    function add_deposit(Request $req)
    {
        
        
        $data=new Deposit();
        $data->c_id=$req->c_id;
        $data->amount=$req->amount;
        $data->user_id=Auth::user()->id;
        if ($req->hasFile('image')) {

            $file = $req->file('image');
            $extension = $req->image->extension();
            $fileName1 = time() . "1_." . $extension;
            $req->image->move('upload/images/', $fileName1);
            $data->image = $fileName1;
        }
        $data->save();
        
        return back()->with('success','Your Amount Successfully Deposit');
    }
    public function profile()
    {
           $code=Auth::user()->code;
  
          if($code==null)
          {
            
            $fileName=time();
            $user = User::find(Auth()->user()->id);
            $user->code = $fileName;
            $user->update();
            
          }
        return view('user.profile-settings');
    }
    public function referrals(){
        
        $users=User::all();
     
        $user=Auth()->user()->id;

      
        $data=User::where('refer_by',$user)->get();
        
    
        return view('user.referrals',compact('data'));
        // compact('data','amount'));
    }
    
    function withdraw_saved(Request $req)
    {
        
        $data=new withdraw();
        $data->c_id=$req->c_id;
        $data->amount=$req->amount;
        $data->user_id=Auth::user()->id;
        $data->save();
        return back()->with('success','Your  Withdrawal Request Send To Admin');
    }
    public function see_profit($id){
      $data=ProfitHistory::where('user_id',$id)->get();
      

     
    return view('user.see-profits',compact('data'));
    }
   
}
