<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $devices = Device::all();
            return redirect()->json(['device'=>$device]);
            app('db')->commit();
        } catch (\Exception $e) {

            app('db')->rollback();

            return response()->json([], 403);
        }
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
        try{
            $this->validate($request,[
                'serial'            =>  'required|integer',
                'type_device_id'    =>  'required|integer'
            ]);
            $device = Device::create([
                'serial'            =>  $request->get('serial'),
                'type_device_id'    =>  $request->get('type_device_id'),
                'lat'               =>  $request->get('lat'),
                'lng'               =>  $request->get('lng')
                ]);
            return redirect()->json(['device'=>$device]);
            app('db')->commit();
        } catch (\Exception $e) {

            app('db')->rollback();

            return response()->json([], 403);
        }
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
        try{
            $this->validate($request,[
                'serial'            =>  'required|integer',
                'type_device_id'    =>  'required|integer'
            ]);
            $input = $request->all();
            $device = Device::find($id)->update($input);
            return redirect()->json(['device'=>$device]);
            app('db')->commit();
        } catch (\Exception $e) {

            app('db')->rollback();

            return response()->json([], 403);
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
        //
    }
}
