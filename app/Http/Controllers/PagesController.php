<?php

namespace App\Http\Controllers;

use App\Mail\ContactDpo;
use App\Mail\Rectification;
use App\Mail\Forget;
use App\Mail\Data;
use App\Mail\Copyright;
use App\Mail\Access;
use App\Mail\Restriction;
use App\Mail\Unsubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Lang;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return view('pages.index');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dpo(){

        return view('pages.dpo');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dpoSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new ContactDpo);
        if (Mail::failures()) {
            return redirect('/data-protection-officer')->with('failure', trans('general.dpo_failure'));
        }else{
            return redirect('/data-protection-officer')->with('success', trans('general.dpo_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cookies(){

        return view('pages.cookies');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function copyright(){

        return view('pages.copyright');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dcmaSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Copyright);
        if (Mail::failures()) {
            return redirect('/copyright')->with('failure', trans('general.dcma_failure'));
        }else{
            return redirect('/copyright')->with('success', trans('general.dcma_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function restriction(){

        return view('pages.restriction');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restrictionSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Restriction);
        if (Mail::failures()) {
            return redirect('/data-restriction')->with('failure',  trans('general.rest_failure'));
        }else{
            return redirect('/data-restriction')->with('success',  trans('general.rest_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rectification(){

        return view('pages.rectification');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function rectificationSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Rectification);
        if (Mail::failures()) {
            return redirect('/rectification')->with('failure',  trans('general.rectif_error'));
        }else{
            return redirect('/rectification')->with('success',  trans('general.rectif_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function disclaimer(){

        return view('pages.disclaimer');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forget(){

        return view('pages.forget');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forgetSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Forget);
        if (Mail::failures()) {
            return redirect('/forget-me')->with('failure', trans('general.forget_error'));
        }else{
            return redirect('/forget-me')->with('success', trans('general.forget_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function imprint(){

        return view('pages.imprint');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function media(){

        return view('pages.media');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function access(){

        return view('pages.access');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function accessSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Access);
        if (Mail::failures()) {
            return redirect('/access-data')->with('failure', trans('general.access_error'));
        }else{
            return redirect('/access-data')->with('success', trans('general.access_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function data(){

        return view('pages.data');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dataSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Data);
        if (Mail::failures()) {
            return redirect('/request-data')->with('failure', trans('general.data_error'));
        }else{
            return redirect('/request-data')->with('success', trans('general.data_success'));
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacy(){

        return view('pages.privacy');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function settings(){

        return view('pages.settings');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms(){

        return view('pages.terms');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unsubscribe(){

        return view('pages.unsubscribe');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unsubscribeSendEmail(Request $request){

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        Mail::to(env("MAIL_TO_ADDRESS", "youremail@example.com"))->send(new Unsubscribe);
        if (Mail::failures()) {
            return redirect('/unsubscribe')->with('failure', trans('general.subs_error'));
        }else{
            return redirect('/unsubscribe')->with('success', trans('general.subs_success'));
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function offer(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'message' => 'required',
            'agree' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        $request = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'body' => $request->input('message')
        ];

        Mail::send('emails.offer', $request, function($message){
            $message->to('youremail@example.com', 'You')->subject("New offer request");
        });

        \Session::flash('message', '<div class="request-sent-msg">Your request was successfully sent.</div>' );

        return back();

    }

}
