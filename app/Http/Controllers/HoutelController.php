<?php

namespace App\Http\Controllers;

use App\Models\Houtel;
use Illuminate\Http\Request;

class HoutelController extends Controller
{
    /**
     * Display a listing of the resource.
     * read
     */
    public function index()
    {
        $houtels = Houtel::all();
        return view('houtel.index', compact('houtels'));
        
    }

    /**
     * Show the form for creating a new resource.
     * create (menambahkan data)
     */
    public function create()
    {
        return view('houtel.create');
    }

    /**
     * Store a newly created resource in storage.
     * create (menambahkan data)/menyimpan data
     */
    public function store(Request $request)
    {
        $houtel = new Houtel;
        $houtel->cities_id = $request->cities_id;
        $houtel->Address = $request->address;
        $houtel->About = $request->about;
        $houtel->fasility = $request->fasility;
        $houtel->photo = 'photo.jpg';
        $houtel->save();

        return redirect('/houtel');
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
