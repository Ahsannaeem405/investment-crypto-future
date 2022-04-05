<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\withdraw;
use App\Models\Deposit;
use Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
                
               
            \View::composer('user.layout.main', function($view) {
                $all=0;
                $sum=0;


                $dop=Deposit::where('user_id',Auth::user()->id)->where('status','Approve')->sum('approve_amount');
                $wid = withdraw::where('user_id',Auth::user()->id)->where('status','Approve')->sum('amount');
                $sum=$dop+Auth::user()->Profit+Auth::user()->Bonsues+Auth::user()->REF_COMISSIONS ;
                $all=$sum-$wid;

                 $view->with('all', $all);
        });

    }
}
