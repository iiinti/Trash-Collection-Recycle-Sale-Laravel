<?php

namespace App\Http\Controllers;

use App\Models\Drive;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DriveController extends Controller
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
        return view('drives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $this->validate($request,[
        //     'drive_type'=>'required',
        //     'date'=>'required',
        //     'drive_number'=>'required',
        //     'sources_destination'=>'required',
        // ]);
        // dd($request);
        $data = $request->all();
        //dd($data['date']);
        $data['date'] = str_replace(',', '', $data['date']);
        //$dateArray = explode (" ", $data['date']);
        $data['date'] = Carbon::parse($data['date']);
        if ($data['drive_type'] == "pickup") {
            $data['sources_destination'] = $data['sources'];
        } elseif ($data['drive_type'] == "sales") {
            $data['sources_destination'] = $data['destinations'];
        }
        //dd($dateCarbon);
        Drive::create($data);
        dd("Okay");
        return redirect()->back()->with('message','Document Has Been Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function show(Drive $drive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function edit(Drive $drive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drive $drive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drive $drive)
    {
        //
    }
}
