<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use Session;
use App\Mail\ContactShipped;
use Mail;

class ContactController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      return view('contact.index');
  }

  public function post(Request $request)
  {
      //
      $options = [
          'from' => session("contact.email"),
          'from_name' => session("contact.sei") . " " . session("contact.mei"),
          'to' => "yokota@acoustype.com",
          'to_name' => "送信先名",
          'cc' => "debug@acoustype.jp",
          'bcc' => "postmaster@acoustype.jp",
          'subject' => 'お問い合わせメール',
          'template' => 'contact.mail', // resources/views/emails/contact/mail.blade.php
      ];

      $data = [
          'hoge' => 'hogehoge',
      ];

      $mail = Mail::to($options["to"]);
      if($options["cc"]) $mail->cc($options["cc"]);
      if($options["bcc"]) $mail->bcc($options["bcc"]);

      $mail->send(new ContactShipped($options, $data));

      //送信済みフラグ
      Session::put('contact.send',true);

      // リダイレクト
      return redirect(route("done"));
  }


    public function comfirm(ContactRequest $request)
    {
        //　セッション代入
        Session::put('contact',$request->all());
        //        $request->flash();

        return view('contact.confirm');
    }

    public function done(Request $request)
    {
        //
        if(session("contact.send") !== true)
        {
          return redirect(route("top"));
        }
        session()->forget('contact');
        session()->migrate(true);

        return view('contact.done');
    }

}
