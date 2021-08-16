<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function setSession(Request $request)
    {
        $request->session()->put('name', 'hoang');
        session([
            "id" => 1
        ]);
    }

    public function getSession(Request $request)
    {

        echo $request->session()->get("name");
        echo session("id");
        $session = $request->session()->all();
        dd($session);
    }

    public function checkExits(Request $request)
    {
        if ($request->session()->has("name")) ;
        echo "Sesion name co ton tai ";

        if ($request->session()->exists("name")) ;
        echo "<br>" . "sesion có tồn tại và giá trị khác null";
    }

    public function deleteSession(Request $request)
    {
        $request ->session()->forget("name");// xoa seesion có key la name
        $request->session()->forget(["name","id"]);// xóa sesion có key la id
        //Xóa toan bọ sesion
        $request->session()->flush();
    }

    public function setFlashSession(){
       return redirect("/get-flash-session")->with("success","them flash session thanh cong");
    }
    public  function getFlashSession(){
        return view("/get-flash-session");
    }
}
