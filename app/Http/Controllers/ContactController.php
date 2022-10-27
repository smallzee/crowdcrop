<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        $page_title = "Contact Us";
        return view('contact',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|numeric',
            'subject'=>'required',
            'message'=>'required',
            'g-recaptcha-response'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first())->withInput();
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => get_settings('secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            //'remoteip' => $_SERVER['REMOTE_ADDR']
        ];
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $res = json_decode($response, true);

        if (getenv('APP_ENV') != "local") {
            if ($res['success'] == false) {
                return redirect()->back()->with('alert_error', 'Invalid reCaptcha, please try again');
            }
        }

        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $message = $request->email;
        $phone = $request->phone;

        if (getenv('APP_ENV') != "local"){
            Mail::to(get_settings('official_email'))->send(new ContactUs("$name","$email","$subject","$message","$phone"));
        }
        return back()->with('alert_success','Your message has been sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
