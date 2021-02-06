<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesssageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Messsage::all();
        return view('admin.message', ['datalist' => $datalist]);
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
     * @param  \App\Models\Messsage  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Messsage $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messsage  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Messsage $message,$id)
    {
        $data = Messsage::find($id);
        $data->status = 'Read';
        $data->save();

        return view('admin.message_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messsage  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messsage $message,$id)
    {
        $data = Messsage::find($id);
        $data->status = 'Read';
        $data->note = $request->input('note');
        $data->save();

        return back()->with('success', 'This message updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messsage  $message
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Messsage::find($id);
        $data->delete();
        $max = DB::table('messages')->max('id') + 1;
        DB::statement("ALTER TABLE messages AUTO_INCREMENT =  $max");

        return redirect()->route('admin_message');
    }
}
