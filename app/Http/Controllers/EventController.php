<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;

class EventController extends Controller
{
    //
    public function list(Request $request)
    {
        $params      = $request->all();
        $perPage     = empty($params['itemsPerPage']) ? 10 : (int)$params['itemsPerPage'];
        $events       = Event::query();
        $events       = $this->sort($events, $params['sortBy'], $params['sortDesc'], false);
        $events      = $this->finalize($events,  $perPage);

        $data        = new stdClass();
        $data->events = $events;
        return response()->json($data, 200);
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
    public function destroy(Request $request){
        $event = Event::find($request->id);
        if($event->gambar){
            unlink(public_path().$event->gambar);
        }
        return response()->json(Event::destroy($request->id));
    }
    public function edit(Request $request){
        $data               = [];
        $data['item']       = Event::find($request->id);
        $data['submitUrl']  = '/api/event/'. $request->id;
        return response()->json($data);
    }

    public function create()
    {
       $data                = [];
       $data['submitUrl']   = '/api/event';
       return response()->json($data);
    }

    public function store(Request $request){
            $event = new Event();
            $file = '';
            if( $request->file !=='null' && $request->noimage === 'false'){
                $file = $request->file;
                $filename           = $file->getClientOriginalName();
                $fullPath           = '/img/event/'.$filename;
                $file->move(public_path().'/img/event/', $filename);
                $event->gambar     = $fullPath;
            }
            $event->judul  = $request->judul;
            $event->detail    = $request->detail;
            $event->tgl_mulai   = Carbon::parse($request->tgl_mulai)->format('Y-m-d H:i:s');
            $event->tgl_selesai =  Carbon::parse($request->tgl_selesai)->format('Y-m-d H:i:s');
            $event->save();
            return response($event, 200);
    }
    public function update(Request $request, $id){
        $event         = Event::find($id);
        $event->judul  = $request->judul;
        $event->detail    = $request->detail;
        $event->tgl_mulai    = Carbon::parse($request->tgl_mulai)->format('Y-m-d H:i:s');
        $event->tgl_selesai = Carbon::parse($request->tgl_selesai)->format('Y-m-d H:i:s');
        $file = '';
        if($request->noimage === 'false'){
            if($request->file !=='null'){
                $file = $request->file;
                $filename           = $file->getClientOriginalName();
                $fullPath           = '/img/event/'.$event->id.'_'.$filename;
                $file->move(public_path().'/img/event/', $event->id.'_'.$filename);
                $event->gambar     = $fullPath;
            }
        }else{
            if(file_exists(public_path().'/img/event/'.$event->gambar && $event->gambar)){
                unlink(public_path().'/img/event/'.$event->gambar);
            }
            $event->gambar     = NULL;
        }
        $event->save();
        return response($file, 200);
    }
}
