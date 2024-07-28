<?php

namespace App\Http\Controllers;

use App\Models\AdCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index(){
        return view('ads.index');
    }
    public function show($filename){
        if(!file_exists(public_path().'/qrcodes/'.$filename.'.png')){
            return redirect()->route('index');
        }
        $ads=AdCenter::latest()->take(3)->get();
        return view('ads.download',['filename'=>$filename, 'ads'=> $ads]);
    }
    
    public function store(Request $request){
        $data=$request->except('style');
        $style=$request->style;
        $qrCode='';
        $dataString = json_encode($data);
        if(isset($style)){
            $qrCode=QrCode::size(300)->format('png')->style($style)->generate($dataString);
        }elseif(isset($data)){
            $qrCode=QrCode::size(300)->format('png')->generate($dataString);
        }else{
            return response()->json(['error'=>'Select any field'],400);
        }
        $filename = Str::uuid();
        $file = $filename . '.png';
        $publicPath = public_path('qrcodes');
        if (!File::isDirectory($publicPath)) {
            File::makeDirectory($publicPath, 0777, true, true);
        }
        file_put_contents(public_path('qrcodes/' . $file), $qrCode);
        return response()->json(['filename'=>$filename],200);
    }
    public function download($format,$filename){

    }
}
