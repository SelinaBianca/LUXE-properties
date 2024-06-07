<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
      $user = Auth::user();


        if($user->role !=1 && $user->role !=5 ){
            echo "You don't have permissions to view this";
            exit();

        }


        return view('dashboard',compact('user'));
    }
}
