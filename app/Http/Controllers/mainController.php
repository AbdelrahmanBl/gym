<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\RegisterPayment;

use App\Mail\SendEmail;

use App;
use Session;
use Mail;

class mainController extends Controller
{
    public function index(Request $request)
    {
        $this->defineDefaultLang($request);
        
        return view('pages.index');
    }

    public function checkout(Request $request)
    {
        $this->defineDefaultLang($request);

        $checkoutPage = true;
        $questionIde  = 'male';
        $gender       = request()->get('gender');
        if($gender && in_array($gender,['male','female'])) {
            if($gender == 'female')
                $questionIde = 'female';
        }
        
        $questions   = json_encode(__("{$questionIde}"));
        
        return view('pages.checkout',compact('questions','questionIde','checkoutPage'));
    }

    public function activate_checkout(Request $request) 
    {
        // $this->defineDefaultLang($request);
        
        if($request['event_type'] == "CHECKOUT.ORDER.COMPLETED") {
            // Setting::create([
            //     'key'     => date('H:i:s'),
            //     'value'   => json_encode($request->all())
            // ]);
            $where = [
                'order_id'      => $request['resource']['id'],
                'amount'        => $request['resource']['purchase_units'][0]['amount']['value'],
                'currency'      => $request['resource']['purchase_units'][0]['amount']['currency_code'],
                'is_verified'   => 0
            ];
            $data = RegisterPayment::where($where)->first();
            if($data) {
                RegisterPayment::where('id',$data->id)->update(['is_verified' => 1]);
                // Send To Email
                $email = 'abdelrahmangamal990@gmail.com';
                Mail::to($email)->bcc('dietclubeg@Team')->send(new SendEmail($data));
            }
        }
    }

    public function success(Request $request) 
    {
        $this->defineDefaultLang($request);

        return view('pages.success');
    }

    public function register_payment(Request $request) 
    {
        $chk = RegisterPayment::where('order_id',$request->order_id)->first();
        if(!$chk) {
            RegisterPayment::create([
                'order_id'  => $request->order_id,
                'amount'    => $request->amount,
                'currency'  => 'USD',
                'responds'  => json_encode($request->responds),
                'gender'    => $request->gender
            ]);
        }
        
        
    }

    public function change_lang(Request $request)
    {
        $current_lang = $request->session()->get('lang');
        $set_lang     = 'ar';
        if($current_lang == 'ar')
            $set_lang = 'en';
            // dd($set_lang);
        $request->session()->put('lang', $set_lang);

        return redirect($request->route);
    }

    public function defineDefaultLang($request)
    {
        $lang = $request->session()->get('lang', 'en');
        App::setLocale($lang);
    }
}
