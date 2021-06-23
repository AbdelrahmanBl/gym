<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Session;

class mainController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->session()->get('lang', 'en');

        App::setLocale($lang);
        return view('pages.index');
    }

    public function change_lang(Request $request)
    {
        $current_lang = $request->session()->get('lang');
        $set_lang     = 'en';
        if($current_lang == 'en')
            $set_lang = 'ar';
            // dd($set_lang);
        $request->session()->put('lang', $set_lang);

        return redirect($request->route);
    }
}
