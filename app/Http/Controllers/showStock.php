<?php

namespace App\Http\Controllers;
use App\Models\stock;
use Illuminate\Http\Request;

class showStock extends Controller
{
    //
    function show(Request $req)
    {   $name=$req->holder;
        $stockData=new stock;
        $showingData=$stockData->where('stock_Holder',$name)->get();
        return response()->json(['items' => $showingData]);
    }

}
