<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;
use Image;
use Picqer\Barcode\BarcodeGeneratorPNG;

class UnduhKtmController extends Controller
{
    //
    public function search(Request $request){
        $params = $request->all();
        $mahasiswa = Mahasiswa::with('jurusan')->where('nama', 'LIKE', '%'.$params['search'].'%')->orWhere('nim', 'LIKE', '%'.$params['search'].'%')->get();
        $data = [];
        $data['mahasiswa'] = $mahasiswa;
        return response($data);
    }

    public function downloadKtm(Request $request){
        $template   = public_path('img/ktm/template.png');

        $fontFile   = public_path('fonts/calibrib.ttf');
        $nama       = $request['item']['nama'];
        $nim        = $request['item']['nim'];
        $output     = public_path('img/ktm/temp/output-'.$nim.'.png');
        $prodi      = $request['item']['jurusan']['nama'];
        $tempatLahir= $request['item']['tempat_lahir'];
        $tglLahir   = Carbon::parse($request['item']['tanggal_lahir'])->format('d-m-Y');
        if(file_exists($output)){
            unlink($output);
        }
        $barcode    = public_path('img/ktm/temp/'.$nim.'.png');
        if(file_exists($barcode)){
            unlink($barcode);
        }
        $img = Image::make($template);
        $generator = new BarcodeGeneratorPNG();
        file_put_contents($barcode, $generator->getBarcode($nim, $generator::TYPE_CODE_128,1.5, 70,[0, 0, 0]));
        $img->text($nama, 180,262, function($font) use($fontFile){
            $font->file($fontFile);
            $font->size(17);
            $font->align('left');
        });
        $img->text($nim, 180,293, function($font) use($fontFile){
            $font->file($fontFile);
            $font->size(17);
            $font->align('left');
        });
        $img->text($prodi, 180,328, function($font) use ($fontFile){
            $font->file($fontFile);
            $font->size(17);
            $font->align('left');
        });
        $img->text($tempatLahir.', '.$tglLahir, 180,362, function($font) use($fontFile){
            $font->file($fontFile);
            $font->size(17);
            $font->align('left');
        });
        $img->insert($barcode,'bottom-left', 18,55);
        $img->save($output);
        return response($output);
    }
    public function clearTemp(Request $request){
        $nim        = $request->nim;
        $barcode    = public_path('img/ktm/temp/'.$nim.'.png');
        $output     = public_path('img/ktm/temp/output-'.$nim.'.png');
        if(file_exists($barcode)){
            unlink($barcode);
        }
        if(file_exists($output)){
            unlink($output);
        }
        return response('success', 200);
    }
}
