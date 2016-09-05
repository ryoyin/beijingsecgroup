<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;

class SystemparamController extends Controller
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
        $systemParam = App\Systemparam::orderBy('param_name')->get();

        $data = array(
            'menu' => array('systemparam', 'systemparam.list'),
            'parameters' => $systemParam
        );

        return view('backend.systemparam.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'menu' => array('systemparam', 'systemparam.create'),
            'title' => '新增',
            'param' => array(
                'param_name' => old('param_name'),
                'param_value' => old('param_value'),
            ),
            'action' => 'bjsgadmin/systemparam'
        );

        return view('backend.systemparam.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate user input
        $this->validate($request, [
            'param_name' => 'required',
            'param_value' => 'required'
        ]);

        $systemparam = new App\Systemparam;
        $systemparam->param_name = $request->param_name;
        $systemparam->param_value = $request->param_value;

        $systemparam->save();

        return redirect('bjsgadmin/systemparam')->with('alert-success', 'System Parameter was successful added!');;
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
        $systemparam = App\Systemparam::find($id);

        if(old('title') === NULL) {
            $publish_time = substr($systemparam->publish_time, 11, -1);

            $systemparam = array(
                'param_name' => $systemparam->param_name,
                'param_value' => $systemparam->param_value,
            );
        } else {
            $systemparam = array(
                'param_name' => old('param_name'),
                'param_value' => old('param_value'),
            );
        }

        $data = array(
            'title' => '修改',
            'menu' => array('systemparam', 'systemparam.list'),
            'param' => $systemparam,
            'formMethod' => 'PUT',
            'action' => 'bjsgadmin/systemparam/'.$id
        );

        return view('backend.systemparam.form', $data);
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
        $this->validate($request, [
            'param_name' => 'required',
            'param_value' => 'required'
        ]);

        $systemparam = App\Systemparam::find($id);
        $systemparam->param_name = $request->param_name;
        $systemparam->param_value = $request->param_value;
        $systemparam->save();

        return redirect('bjsgadmin/systemparam')->with('alert-success', 'System parameter was successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $systemparam = App\Systemparam::findOrFail($id);
        $param_name = $systemparam->param_name;
        $systemparam->delete();

        return redirect('bjsgadmin/systemparam')->with('alert-warning', '系統參數 "<b>'.$param_name.'<b>" 已被成功刪除!');
    }
}
