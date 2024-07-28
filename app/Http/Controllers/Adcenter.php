<?php

namespace App\Http\Controllers;

use App\Models\AdCenter as ModelsAdCenter;
use Illuminate\Http\Request;

class Adcenter extends Controller
{
    public function index(){
        $tables=ModelsAdCenter::all();
        return view('ad.index',['tables'=>$tables]);
    }
    public function create(){
        return view('ad.create');
    }
    public function store(Request $request){
        $request->validate([
            'adCode'=>'required|string'
        ]);
        $adsData = $request->only(["adCode"]);
        $adsData['adCode']=htmlentities($adsData['adCode']);
        ModelsAdCenter::create($adsData);
        session()->flash('success','Ads added successfully');
        return redirect()->route('ad.index');
    }
}
