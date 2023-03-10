<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     * read
     */
    public function index()
    {
        $cities = City::all(); //select * from city or mengambil data dan kasih nama
        return view('city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     * create (menambahkan data)
     */
    public function create()
    {
        return view('city.create');
    }

    /**
     * Store a newly created resource in storage.
     * create (menambahkan data)/menyimpan data
     */
    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->name;
        $city->photo = 'photo.jpg';
        $city->save();

        return redirect('/city');
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
