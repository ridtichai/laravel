<?php
/**
 * Created by PhpStorm.
 * User: ridtichai
 * Date: 27/3/2560
 * Time: 14:00
 */

namespace app\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class loginController extends Controller
{

    public function login( Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        echo $username."---".$password."<br>";

      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();

        if( count($checkLogin) >0 )
        {
            echo "Login SuccessFull";
        }else{
           // echo "Login Faield";
            //return view('admin.login');
          //  return view('/login');
            return Redirect::intended('/login');
        }

    }


}