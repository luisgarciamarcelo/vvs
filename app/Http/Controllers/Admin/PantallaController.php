<?php

namespace GPOVALLAS\Http\Controllers\Admin;

use Carbon\Carbon;
use Faker\Provider\File;
use GPOVALLAS\Pantallas;
use GPOVALLAS\Role;
use GPOVALLAS\User;
use Illuminate\Http\Request;
use GPOVALLAS\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PantallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Pantallas::all()->where('pais_id',1)->where('estatus',2);
        return view('admin.screens.alerts')->with(['alerts' => count($count)]);
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


    public function edit($name)
    {
        return view('admin.screens.edit')->with(['screens' => Pantallas::where('codigo','like','%'.$name.'%')->get()]);
    }


    public function alerts(){
        return view('admin.screens.alerts');
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
        $image = base64_encode(file_get_contents($request->file('picture')));
        $file  = base64_decode($request->file('picture'));
        //$path = public_path() . "/" . $image_name;
        //\File::put(storage_path(). '/' . $image_name, $imagedecode);
        $screen = Pantallas::find($id);
        $screen->picture = $image;
        $screen->save();
        //echo var_dump($screen);
        return view('home')->with(['columns' => Pantallas::all()->where('pais_id',1),'success'=>'Se ha cargado la imagen exitosamente']);
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

    public function store(Request $request)
    {
        $pantalla = Pantallas::where('codigo','=',$request->codigo)->firstOrFail();
        $pantalla->picture = $request->picture;
        $pantalla->save();
        $file      = base64_decode($request->picture);
        $date      = Carbon::now();
        $date      = $date->format('d-m-y H:i:s');
        $directory = public_path().'/imagenes/'.$request->codigo.'/';
        if(!file_exists($directory)){
            mkdir($directory, $mode = 0777,true);
            $fileSave = public_path().'/imagenes/'.$request->codigo.'/'.$request->codigo.$date.'.jpg';
            file_put_contents($fileSave,$file);
        }else{
            $fileSave = public_path().'/imagenes/'.$request->codigo.'/'.$request->codigo.$date.'.jpg';
            file_put_contents($fileSave,$file);
        }
        return json_encode(['status'=>true,'data'=>$pantalla]);

    }

    public function login(Request $request)
    {
        //$pass = Hash::make($request->pass);
        $user = User::where('email',$request->user)->get();

        if(Auth::attempt(array('email' => $request->user, 'password' => $request->pass))){
            return response()->json([
                'status' => true,
                'data' => $user
                ],Response::HTTP_OK);
        }else{
            return response()->json([
                'status' => false,
                'data' =>  __('Datos no encontrados')
            ],Response::HTTP_OK);
        }

        return json_encode($user);
    }


}
