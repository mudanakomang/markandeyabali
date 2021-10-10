<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Models\Berita;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use stdClass;
use Throwable;

class BeritaController extends Controller
{
    //
    public function list(Request $request){
       $params      = $request->all();
       $perPage     = empty($params['itemsPerPage']) ? 10 : (int)$params['itemsPerPage'];
       $berita      = Berita::query();
       $berita      = $this->filter($berita, $params);
       $berita      = $this->sort($berita, $params['sortBy'], $params['sortDesc'], false );
       $berita      = $this->finalize($berita, $perPage);

       $data        = new stdClass();
       $data->berita= $berita;
       return response()->json($data, 200);
    }
    private function filter($berita, $params){
        if(array_key_exists('publishedOnly', $params) && $params['publishedOnly'] === 'true'){
            $berita->where('publish', 1);
        }
        return $berita;
    }
    private function sort($query, $sortBy, $sortDesc, $multiSort) {
        if ($sortBy) {
            if ($multiSort) {
                foreach($sortBy  as $key => $item){
                    $query->orderBy($item, $sortDesc[$key] === 'true' ? 'desc' : 'asc');
                }
            } else {
                $query->orderBy($sortBy, $sortDesc === 'true' ? 'desc' : 'asc');
            }
        }else{
            $query->orderByDesc('created_at');
        }
        return $query;
    }
    private function finalize($query, $perPage) {
        return $query->paginate($perPage);
    }

    public function publishSetting(Request $request){
        try{
            return response(Berita::where('id', $request->id)->update(['publish'=>$request->state]), 200);
        }catch(Exception $e){
            return response($e->getMessage(), 500);
        }

    }

    public function edit(Request $request){
        $data               = [];
        $data['item']       = Berita::find($request->id);
        $data['submitUrl']  = '/api/berita/'. $request->id;
        return response()->json($data);
    }
    public function create()
    {
       $data                = [];
       $data['submitUrl']   = '/api/berita';
       return response()->json($data);
    }
    public function store(Request $request){
        $berita = new Berita();
        $file = '';
        if( $request->file !=='null' && $request->noimage === 'false'){
            $file = $request->file;
            $filename           = $file->getClientOriginalName();
            $fullPath           = '/img/berita/'.$filename;
            $file->move(public_path().'/img/berita/', $filename);
            $berita->gambar     = $fullPath;
        }
        $berita->judul  = $request->judul;
        $berita->isi    = $request->isi;
        $berita->tgl_publish    = $request->publish == 1 ?   Carbon::now()->format('Y-m-d') :  NULL;
        $berita->publish        = $request->publish;
        $berita->save();
        return response($berita, 200);
    }
    public function update(Request $request, $id){
        $berita         = Berita::find($id);
        $berita->judul  = $request->judul;
        $berita->isi    = $request->isi;
        $berita->tgl_publish    = $request->publish == 1 ?   Carbon::now()->format('Y-m-d') :  NULL;
        $file = '';
        $berita->publish    = $request->publish;
        if($request->noimage === 'false'){
            if($request->file !=='null'){
                $file = $request->file;
                $filename           = $file->getClientOriginalName();
                $fullPath           = '/img/berita/'.$berita->id.'_'.$filename;
                $file->move(public_path().'/img/berita/', $berita->id.'_'.$filename);
                $berita->gambar     = $fullPath;
            }
        }else{
            if(file_exists(public_path().'/img/berita/'.$berita->gambar && $berita->gambar)){
                unlink(public_path().'/img/berita/'.$berita->gambar);
            }
            $berita->gambar     = NULL;
        }
        $berita->save();
        return response($file, 200);
    }
    public function destroy(Request $request){
        $berita = Berita::find($request->id);
        if($berita->gambar){
            unlink(public_path().$berita->gambar);
        }
        return response()->json(Berita::destroy($request->id));
    }
}
