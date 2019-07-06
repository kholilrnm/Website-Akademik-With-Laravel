<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class loginController extends BaseController
{
    public function login(Request $req)
    {
    	$u_adm = $req->input('u_adm');
    	$p_adm = $req->input('p_adm');

        $checkLogin = DB::table('t_admin')->where(['u_adm'=>$u_adm, 'p_adm'=>$p_adm])->get();
        if (count($checkLogin) > 0)
        {
        	echo "login succes";
        }
        else
        {
        	echo "login gagal";
        }
    }
}
?>