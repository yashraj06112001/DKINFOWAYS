<?php

namespace App\Http\Controllers;
use App\Models\loginRecord;
use App\Models\signupRecord;
use Illuminate\Http\Request;
use App\Models\stock;
class handle extends Controller
{
    //
    function handleLogin(Request $req)
    {
        $name=$req->input('name');
        $password=$req->input('password');
        $signupRecord=new signupRecord;
        $x=$signupRecord->where('name',$name)->where('password',$password)->get();
        if($x->count()==0)
        {
           return  response()->json(['redirect_url' => route('loginerror')]);
        }
        
        else{
            $loginRecord=new loginRecord;
            $loginRecord->name=$name;
            $loginRecord->password=$password;
            $loginRecord->save();
            return response()->json(['redirect_url' => route("profile",['name' => $name])]);
            
        }
       
    }

    function handlesignup(Request $req)
    {
        $signupRecord=new signupRecord;
        $signupRecord->name=$req->input('name');
        $signupRecord->password=$req->input('password');
        $signupRecord->save();
        return response()->json(['redirect_url' => route('login')]);

    }

    function handlebutton1tologin(Request $req)
    {
        return response()->json(['redirect_url' => route('login')]);
    }
    function handlebutton2tologin(Request $req)
    {
        return response()->json(['redirect_url' => route('signup')]);
    }

    function handlestock(Request $req)
    {
        $stock=new stock;
        $name=$req->name;
        $value=$req->value;
        $stock_holder=$req->stockholdername;
        $stock->stock_name=$name;
        $stock->stock_price=$value;
        $stock->stock_Holder=$stock_holder;
        $stock->save();
    }
}


