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
class PaymentMethodController extends Controller{

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
            return redirect("/home");
        }
        
        $userinfo = DB::table('users')->select('*')->where('id',$userid)->first();
        $allcontacts = DB::select('select count(id) as total_ids from businesscontacts where active = 1')[0]->total_ids;

        $customer = DB::table('users')->whereNull('deleted_at')->where('id',$userid)->first()->customerID;
        require_once('stripe-php/init.php');
        $stripe = array(
            "secret_key"      => "sk_test_5RHVe0SMHECoNMe5H2K76oxh",
            "publishable_key" => "pk_test_uPHbA4uj1n1d4UJB4xDTMSJ9"
        );
        $stripe = new \Stripe\StripeClient(
            'sk_test_5RHVe0SMHECoNMe5H2K76oxh'
          );
        $customers = $stripe->customers->all(['email' => $userinfo->email])->data;
        //$customers[0]->subscriptions->data[0]->id;
    	return View('template.paymentmethod',[
            'userinfo' => $userinfo,
            'username' => isset($username)?$username:'',
            'allcontacts' => $allcontacts,
            'customers' => $customers,
            'count' => count($customers)
        ]);
    }
}