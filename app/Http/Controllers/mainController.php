<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

use App;
use Session;

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
        $questions = json_encode(__('questions'));
        
        return view('pages.checkout',compact('questions'));
    }

    public function activate_checkout(Request $request) 
    {
        if($request->event_type == "CHECKOUT.ORDER.COMPLETED") {
            Setting::create([
                'key'     => date('H:i:s'),
                'value'   => json_encode($request->all())
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
