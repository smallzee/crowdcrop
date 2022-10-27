<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdministrativeController extends Controller
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
        $page_title = "All Administrative";
        $users = User::orderBy('id','desc')->where('role_id',1)->paginate(10);
        return view('panel.administrative.index',compact('page_title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Create Administrative";
        return view('panel.administrative.create',compact('page_title'));
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
            'email'=>'required|unique:users',
            'name'=>'required|max:150|min:3',
            'phone_number'=>'required|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first())->withInput();
        }


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>Hash::make($request->password)
        ]);

        return back()->with('alert_success','Admin has been created successfully');
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
        $page_title = "Update Admin Details";
        $user = User::find($id);
        return view('panel.administrative.edit',compact('user','page_title'));
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
            'name'=>'required',
            'phone_number'=>'required|numeric|min:11'
        ]);
        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->save();

        return back()->with('alert_success',"$user->name details has been changed successfully");
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
