<?php

namespace App\Http\Controllers\panel;

use App\Farmer;
use App\Http\Controllers\Controller;
use App\Mail\ApplicationNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $page_title = "All ".ucwords($slug)." Farmers";
        if (auth()->user()->role_id == 1){
            $farmers = Farmer::where('status',$slug)->orderBy('id')->paginate(20);
        }else{
            $farmers = Farmer::where('status',$slug)->where('partner_id',auth()->user()->partner_id)->orderBy('id')->paginate(20);
        }
        return view('panel.farmer.show',compact('page_title','farmers'));
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
        $page_title = "Farmer Details";
        $farmer = Farmer::find($id);
        return view('panel.farmer.edit',compact('page_title','farmer'));
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
        $validator = Validator::make($request->all(),[
            'status'=>'required',
            'authorized_by'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first())->withInput();
        }

        $farmer = Farmer::find($id);
        $farmer->authorized_by_id = $request->authorized_by;
        $farmer->approved_by_id = auth()->id();
        $farmer->status = strtolower($request->status);
        $farmer->save();

        $authorized = User::find($request->authorized_by_id);


        return back()->with('alert_success','Farmer application has been updated successfully');
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
