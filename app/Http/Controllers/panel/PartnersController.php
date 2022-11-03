<?php

namespace App\Http\Controllers\panel;

use App\Farmer;
use App\Http\Controllers\Controller;
use App\Partners;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnersController extends Controller
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
        $page_title = "All Partners";
        $partners = Partners::orderBy('name')->paginate(10);
        return view('panel.partners.index',compact('page_title','partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Create Partners";
        return view('panel.partners.create',compact('page_title'));
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
            'name'=>'required|unique:partners',
            'description'=>'required',
            'image'=>'required'
        ]);

        if($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        if ($request->has('image')){
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move(base_path('public/assets/images'),$image);
        }

        Partners::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image
        ]);

        return back()->with('alert_success','Partner has been added successfully');
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
        if (auth()->user()->role_id == 2 && auth()->user()->partner_id != $id){
            return abort(404);
        }
        $partner = Partners::find($id);
        $page_title = ucwords($partner->name);
        $farmers = Farmer::where('partner_id',$id)->paginate(10);
        $users = User::orderBy('id','desc')->where('role_id',2)->where('partner_id',$id)->paginate(10);
        return view('panel.partners.show',compact('partner','page_title','users','farmers'));
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
        $page_title = "Edit Partner";
        $partner = Partners::find($id);
        return view('panel.partners.edit',compact('page_title','partner'));
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
            'name'=>'required|',
            'description'=>'required',
        ]);

        if($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }
        $partner = Partners::find($id);

        if ($request->has('image')){
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move(base_path('public/assets/images'),$image);
        }else{
            $image = $partner->image;
        }

        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->image = $image;
        $partner->save();

       return back()->with('alert_success','Partner has been updated successfully');
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
