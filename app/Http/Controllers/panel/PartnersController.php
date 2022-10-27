<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Partners";
        return view('panel.partners.index',compact('page_title'));
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
            $file->move(public_path('public/assets/images'),$image);
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
