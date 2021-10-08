<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use App\Role;
use App\User;
use Session;
use Mail;
use App\Models\BusinessContact;
use Illuminate\Support\Facades\Input;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class FeaturesController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
    **/
    public function __construct()
    {
    }
    public function index(){
        $userid = Session::get('user_id');
        $username = Session::get('user_name');
        if(!$userid) {
         //   return redirect("/frontlogin");
        }
        
    	return View('template.feature',[
            'userid' => $userid,
            'username' => isset($username)?$username:'',
        ]);
    }

}