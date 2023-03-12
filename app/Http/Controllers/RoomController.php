<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     * read
     */
    public function index()
    {
        $rooms = room::all();
        return view('room.index', compact('rooms'));
        
    }

    /**
     * Show the form for creating a new resource.
     * create (menambahkan data)
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     * create (menambahkan data)/menyimpan data
     */
    public function store(Request $request)
    {
        $room = new Room;
        $room->houtels_id = $request->houtels_id;
        $room->type = $request->type;
        $room->harga = $request->harga;
        $room->deskription = $request->deskription;
        $room->photo = 'photo.jpg';
        $room->save();

        return redirect('/room');
    }

    /**
     * Display the specified resource.
     * read
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show (menampilkan) the form for editing the specified resource.
     * update
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update (mengupdate) the specified resource in storage.
     * update /menyimpan data
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove (menghapus) the specified resource from storage.
     * delete
     */
    public function destroy(City $city)
    {
        //
    }
}
