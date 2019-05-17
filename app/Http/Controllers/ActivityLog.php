<?php

namespace App\Http\Controllers;
use App\Models\Rooms;
use App\Models\RoomsImages;
use Illuminate\Http\Request;

class ActivityLog extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showActivityLog() {
        $rooms = Rooms::select('*')
                ->with('roomsImages')
                ->get();
        //print_r('<pre>' .$rooms);exit;
        return view('users/logActivity', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_rooms(Request $request) {
        if ($request->isMethod('post') && $request->ajax()) {
            $posts = $request->post();
            $data = new Rooms();
            $data->room_number = $posts['room_number'];
            $data->save();
            
            $R_id = Rooms::findOrFail($data->id);
            if($files = $request->file('images')){              
               // print_r('<pre>'.$R_id);exit;
                $path = public_path() . "/img/images/roomsImages";
                $priv = 0777;
                if(!file_exists($path))
                {
                    mkdir($path, $priv) ? true : false;
                }
                $name = uniqid() . $files->getClientOriginalName();
                $files->move('img/images/roomsImages',$name);
                $images = new RoomsImages();
                $images->rooms_id = $R_id->id;
                $images->images = 'img/images/roomsImages/' .$name;
                $images->save();
            }   
            $img = RoomsImages::where('rooms_id', $R_id->id)->get();
            //print_r($img);
            
            if ($data) {
                return response()->json(array('message' => 'success', 'data' => $data, 'img' => $images));
            } else {
                return response()->json(array('message' => 'Erorr !!'));
            }
        }
    }

    public function addDefects(Request $request) {

        if ($request->isMethod('post') && $request->ajax()) {
            $posts = $request->post();
            $data = Rooms::find($posts['roomValue']);
            $data->id = $posts['roomValue'];
            $data->defects = $posts['defects'];
            $data->save();
            if ($data) {
                return response()->json(array('message' => 'success', 'data' => $data));
            } else {
                return response()->json(array('message' => 'Error..!!'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRooms() {
        $rooms = Rooms::select('*')->paginate(5);
        return view('users/roomsDetail', ['rooms' => $rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        
        if($request->ajax()){
          $delete = Rooms::where('id', $request->id)->delete();
            if($delete){
                return response()->json(array('message' => 'success'));
            }else{
                 return response()->json(array('message' => 'Error!!'));
        }
       
    }

}
/////////////
}
