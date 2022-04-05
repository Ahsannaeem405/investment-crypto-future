<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Currency;
use App\Models\User;
use App\Models\Deposit;
use App\Models\ProfitHistory;
use App\Models\ReferralProfit;
use App\Models\withdraw;
use App\Models\Stat;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;




class admin extends Controller
{
    function index()
    {
        $all=Deposit::sum('amount');
        $user=User::where('role',2)->count();
        
                $data_k =[];
                $datat =[];
                for($k=7; $k >= 0; $k--) 
                {
                    $month_k =Carbon::today()->subDay($k)->format('Y-m-d');

                    $month_name =Carbon::today()->subDay($k)->format('M d');

                    array_push($datat,$month_name);
                   



                    $respose2 =\Http::get('http://api.coinlayer.com/'.$month_k.'?access_key=289da0e28adf55e741e23f21a1ddcb3f');
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

        return view('admin.index' ,compact('sat','label','all','user'));
                
    }
    function currency()
    {
        $data = Currency::all();
        return view('admin.currency', compact('data'));
    }
    function user()
    {
        $data = User::where('role', 2)->get();
         
         
        
        return view('admin.user', compact('data'));
    }
    
    function update_addess(Request $req)
    {
        $data = Currency::find($req->id);
        $data->address = $req->address;
        $data->update();
        return back()->with('success', 'Wallet Update Successfully');
    }
    function update_user(Request $req)
    {

        $validated = $req->validate([

            'email' => 'email|unique:users,email,' . $req->id

        ]);
        $data = User::find($req->id);
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->email = $req->email;
        $data->Profit = $req->Profit;
        $data->Bonsues = $req->Bonsues;
        $data->REF_COMISSIONS = $req->REF_COMISSIONS;
        $data->ACTIVE_PACKAGES = $req->ACTIVE_PACKAGES;
        $data->TOTAL_PACKAGES = $req->TOTAL_PACKAGES;
        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    function delete($id)
    {


        $data = User::find($id);

        $data->delete();
        return back()->with('success', 'User Delete Successfully');
    }
    function deposit()
    {
        $data=Currency::all();
        $amount=Deposit::whereNull('status')->orderBy('id', 'DESC')->get();
        
        return view('admin.deposit',compact('data','amount'));
    }
    function deposit_report()
    {
        $data=Currency::all();
        $amount=Deposit::whereNotNull('status')->orderBy('id', 'DESC')->get();
        
        return view('admin.deposit_report',compact('data','amount'));
    }
    
    function withdraw()
    {
        
        $amount=withdraw::whereNull('status')->orderBy('id', 'DESC')->get();
        
        return view('admin.withdraw',compact('amount'));
    }
    function withdraw_report()
    {
        
        $amount=withdraw::whereNotNull('status')->orderBy('id', 'DESC')->get();
        
        return view('admin.withdraw_report',compact('amount'));
    }
    


    public function update_information(Request $request)
    {



        $admin_id = $request->admin_id;
        $user = User::find($admin_id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $request->image->extension();
            $fileName = time() . "_." . $extension;
            $request->image->move('upload/images/', $fileName);
            $user->profile = $fileName;
        }
        
        $user->bitcoin = $request->input('bitcoin');
        $user->bnb = $request->input('bnb');
        $user->usdt = $request->input('usdt');
        $user->eth = $request->input('eth');
        $user->shi = $request->input('shi');
        $user->ada = $request->input('ada');
        if ($request->hasFile('shi_file')) {

            $file = $request->file('shi_file');
            $extension = $request->shi_file->extension();
            $fileName1 = time() . "1_." . $extension;
            $request->shi_file->move('upload/images/', $fileName1);
            $user->shi_file = $fileName1;
        }
        if ($request->hasFile('bnb_file')) {

            $file = $request->file('bnb_file');
            $extension = $request->bnb_file->extension();
            $fileName2 = time() . "2_." . $extension;
            $request->bnb_file->move('upload/images/', $fileName2);
            $user->bnb_file = $fileName2;
        }
        if ($request->hasFile('usdt_file')) {

            $file = $request->file('usdt_file');
            $extension = $request->usdt_file->extension();
            $fileName3 = time() . "3_." . $extension;
            $request->usdt_file->move('upload/images/', $fileName3);
            $user->usdt_file = $fileName3;
        } 
        if ($request->hasFile('eth_file')) {

            $file = $request->file('eth_file');
            $extension = $request->eth_file->extension();
            $fileName4 = time() . "4_." . $extension;
            $request->eth_file->move('upload/images/', $fileName4);
            $user->eth_file = $fileName4;
        }   
        if ($request->hasFile('bitcoin_file')) {

            $file = $request->file('bitcoin_file');
            $extension = $request->bitcoin_file->extension();
            $fileName5 = time() . "5_." . $extension;
            $request->bitcoin_file->move('upload/images/', $fileName5);
            $user->bitcoin_file = $fileName5;
        }
        if ($request->hasFile('ada_file')) {

            $file = $request->file('ada_file');
            $extension = $request->ada_file->extension();
            $fileName6 = time() . "6_." . $extension;
            $request->ada_file->move('upload/images/', $fileName6);
            $user->ada_file = $fileName6;
        }  
          

        

        $user->save();


        return back()->with('success', 'Profile Information Updated Successfully.');
    }


    public function change_password(Request $request)
    {
        $user = User::find($request->admin_id);
        if (!Hash::check($request->Current_Password, $user->password)) {
            return back()->with('error', 'Current Password does not match!');
        }
        else{
           
            $validated = $request->validate([
                'New_Password' => 'required|min:6',
                'Confirm_Password'=>'required|same:New_Password'
                ]);
            
            $users = User::find($request->admin_id);
            $users->password = Hash::make($request->New_Password);
            $users->save();
            return back()->with('success', 'Password successfully changed!');
        }
    }

    public function referral_profit()
    {
        $amount=ReferralProfit::first();
        return view('admin.referral-profit',compact('amount'));
    }

    public function add_referral_profit(Request $request)
    {

        $data = new ReferralProfit;
        $user = Auth()->user()->id;
        $data->profit = $request->profit;
        $data->save();
        return back()->with('success', 'Profit has been added !');
    }
 
    public function update_referral_profit(Request $request){
            $data=ReferralProfit::find($request->record_id);
            $data->profit=$request->profit;
            $data->save();
            return back()->with('success', 'Profit has been Updated  !');

    }

    public function approve(Request $request,$amount, $c_id, $user_id, $id)
    {
    
        $user = User::find($user_id);
        $refer_by_user=$user->refer_by;
       
        
        $sum = $user->bitcoin_coin + $request->send_amount;
        $user->bitcoin_coin = $sum;
        $user->update();
        if($refer_by_user !=null){
            $referry= User::find($refer_by_user);
            $profi=ReferralProfit::first();
            $prof=$profi->profit;
            $profit = ($prof / 100) * $request->send_amount;
            $sum1 = $referry->bitcoin_coin + $profit;
            $referry->bitcoin_coin = $sum1;
            $referry->update();

            $profit_history=new ProfitHistory;
            $profit_history->amount=$request->send_amount;
            $profit_history->profit=$profit;
            $profit_history->refer_by_id= $referry->id;
            $profit_history->user_id=$user_id;
            $profit_history->save();

        }

            
        $approve = Deposit::find($id);
        $approve->status = "Approve";
        $approve->approve_amount=$request->send_amount;
        $approve->update();
        
        


    

        return back()->with('success', 'Deposit Approved Successfully');
    }
    public function reject($id)
    {
        $approve = Deposit::find($id);
        $approve->status = "Rejected";
        $approve->update();
        return back()->with('success', 'Deposit Rejected Successfully');
    }
    public function witd_approve(Request $request,$amount, $c_id, $user_id, $id)
    {
    
        $user = User::find($user_id);       
        $sum = $user->bitcoin_coin - $amount;
        $user->bitcoin_coin = $sum;
        $user->update();
        


            
        $approve = withdraw::find($id);
        $approve->status = "Approve";
        $approve->update();
        
        


    

        return back()->with('success', 'Deposit Approved Successfully');
    }
    public function witd_reject($id)
    {
        $approve = withdraw::find($id);
        $approve->status = "Rejected";
        $approve->update();
        return back()->with('success', 'Deposit Rejected Successfully');
    }
}
