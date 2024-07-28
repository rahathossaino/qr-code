<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index(){
        return view('ads.index');
    }
    public function show(){
         return view('ads.qr',['qr'=>QrCode::size(300)->generate(
            'Hello, World!',
        )]);
    }
    public function store(Request $request){
        // $data=[];
        // switch($request->type){
        //     case "link":
        //         $data=[
        //             'link'=>$request->link,
        //         ];
        //         break;
        //     case ''    
        // }
        dd( $request->role);
    }
}
