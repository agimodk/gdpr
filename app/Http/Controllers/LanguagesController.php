<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function changeLanguage()
    {

        if (in_array(request('lang'), ["dk", "en"])) {
            \App::setlocale(request('lang'));
            session(['locale' => request('lang')]);
            return back();
        } else {
            return redirect("/");
        }

    }

}
