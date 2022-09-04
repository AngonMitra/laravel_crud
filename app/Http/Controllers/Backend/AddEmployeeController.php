<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\EmployeeModel;

class AddEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.addemployee');
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
        $obj = new EmployeeModel;

        $obj->fname = $request->fname;
        $obj->lname = $request->lname;
        $obj->nid = $request->nid;
        $obj->address = $request->address;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->status = $request->status;

        $confirm = $obj->save();

        if($confirm){
            return response()->json([
                'msg'=>'success'
            ]);
        }
        else{
            return response()->json([
                'msg'=>'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = EmployeeModel::all();

        if($data){
            return response()->json([
                'msg'=>'success',
                'emp'=>$data
            ]);
        }
        else{
            return response()->json([
                'msg'=>'error'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editemp($id)
    {
        $emp = EmployeeModel::find($id);

       if($emp){
        return response()->json([
            "msg"=>"success",
            "allemp"=>$emp
        ]);
       }
       else{
        return response()->json([
            "msg"=>"error"
        ]);
       }
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
        $obj = EmployeeModel::find($id);

        $obj->fname = $request->fname;
        $obj->lname = $request->lname;
        $obj->nid = $request->nid;
        $obj->address = $request->address;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->status = $request->status;

        $confirm = $obj->update();

        if($confirm){
            return response()->json([
                'msg'=>'success'
            ]);
        }
        else{
            return response()->json([
                'msg'=>'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = EmployeeModel::find($id);
        $data->delete();

        if($data){
            return response()->json([
                'msg'=>'success'
               
            ]);
        }
        else{
            return response()->json([
                'msg'=>'error'
            ]);
        }
    }
}
