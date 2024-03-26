<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.master');
    }
    public function viewDashboard(){
        return view('backend.dashboard.dashboard');
    }


    public function adminadd(){
        return view('backend.dashboard.adminadd-creat');
    }

    public function user(){

        $users=User::all();
        return view('backend.user.user',compact('users'));
    }

    public function vat_cal(){

        // $users=User::all();
        return view('backend.vat.vat_calculator');
    }
}
