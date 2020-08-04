<?php

namespace GPOVALLAS\Http\Controllers\Admin;

use GPOVALLAS\User;
use Illuminate\Http\Request;
use GPOVALLAS\Http\Controllers\Controller;
use GPOVALLAS\Role;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users',User::paginate(10));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','El usuario no puede ser editado');
        }

        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
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
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','El usuario no pudo ser editado');
        }

        $user = User::find($id);
        $user->roles()->sync($request->roles);


        return redirect()->route('admin.users.index')->with('success','El usuario ha sido editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','El usuario no puede ser eliminado por si mismo');
        }
        $user = User::find($id);

        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('admin.users.index')->with('success','El usuario se ha eliminado correctamente');
        }

        return redirect()->route('admin.users.index')->with('Warning','El usuario no pudo ser Eliminado');
    }
}
