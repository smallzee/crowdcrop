<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\Mail\ApplicationNotification;
use App\Partners;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PartnerFarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'buyer_name'=>'required',
            'buyer_email'=>'required',
            'farmer_name'=>'required',
            'witness_name'=>'required',
            'phone_number'=>'required|unique:farmer|max:11',
            'lga'=>'required',
            'volume_sold'=>'required',
            'amount'=>'required|numeric',
            'price_per_kg'=>'required|numeric',
            'bank'=>'required',
            'account_number'=>'required|numeric|min:10',
            'account_name'=>'required',
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

        $application_id = substr(strtoupper(md5(uniqid(rand(), true))), 0, 8);

        Farmer::create([
            'buyer_email'=>$request->buyer_email,
            'buyer_name'=>$request->buyer_name,
            'farmer_name'=>$request->farmer_name,
            'phone_number'=>$request->phone_number,
            'witness_name'=>$request->witness_name,
            'lga'=>$request->lga,
            'volume_sold'=>$request->volume_sold,
            'amount_due'=>$request->amount,
            'price_per_kg'=>$request->price_per_kg,
            'bank_id'=>$request->bank,
            'partner_id'=>$request->partner_id,
            'account_number'=>$request->account_number,
            'account_name'=>$request->account_name,
            'application_id'=>$application_id
        ]);

        if (getenv('APP_ENV') != "local"){

            foreach (User::where('partner_id',$request->partner_id)->get() as $value){
                Mail::to($value->email)->send(new ApplicationNotification($request->buyer_email,$request->buyer_name,$request->farmer_name,$request->witness_name,$request->phone_number,$request->lga,$request->volume_sold,$request->amount,$request->price_per_kg,$request->bank,$request->account_number,$request->account_name,$application_id,"pending"," "," "));
            }
        }

        return back()->with('alert_success','Your application has been sent successfully, kindly wait for approval');
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
        $partner_id = base64_decode($id);
        $partner = Partners::find($partner_id);
        $page_title = $partner->name. " Farmer Registration";
        return view('farmer',compact('page_title','partner'));
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
