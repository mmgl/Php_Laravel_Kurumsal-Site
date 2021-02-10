<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlist = User::all();
        return view('admin.user', ['userlist' => $userlist]);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data = User::find($id);
        return view('admin.user_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user,$id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        if($request->file('image')!=null){
            $data->profile_photo_path = Storage::putFile('profile-photos',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_users')->with('success','User İnformation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(User $user,$id)
    {
        $user = User::find($id);
        $user->delete();
        $max = DB::table('users')->max('id') + 1;
        DB::statement("ALTER TABLE users AUTO_INCREMENT =  $max");

        return redirect()->route('admin_user', ['user' => $user]);
    }

    public function user_roles(User $user, $id)
    {
        $user = User::find($id);
        $datalist = Role::all()->sortBy('name');
        return view('admin.user_roles', ['user' => $user,'datalist'=>$datalist]);
    }

    public function user_role_store(Request $request,User $user, $id)
    {
        $user = User::find($id);
        $roleid = $request->input('roleid');
        $user->roles()->attach($roleid); #many to many ilişkisine veri ekler
        return redirect()->back()->with('success','Role added to the User!');
    }
    public function user_role_delete(Request $request,User $user,$userid,$roleid)
    {
        $user = User::find($userid);
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success','Role deleted from User!');
    }
}
