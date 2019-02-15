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

    public function index(){

        return view('pages.index');

    }

    public function dpo(){

        return view('pages.dpo');

    }

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

    public function cookies(){

        return view('pages.cookies');

    }

    public function copyright(){

        return view('pages.copyright');

    }

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

    public function rectification(){

        return view('pages.rectification');

    }

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

    public function disclaimer(){

        return view('pages.disclaimer');

    }

    public function forget(){

        return view('pages.forget');

    }

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

    public function imprint(){

        return view('pages.imprint');

    }

    public function media(){

        return view('pages.media');

    }

    public function access(){

        return view('pages.access');

    }

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

    public function data(){

        return view('pages.data');

    }

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

    public function privacy(){

        return view('pages.privacy');

    }

    public function settings(){

        return view('pages.settings');

    }

    public function terms(){

        return view('pages.terms');

    }

    public function unsubscribe(){

        return view('pages.unsubscribe');

    }

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
