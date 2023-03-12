<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     * read
     */
    public function index()
    {
        $banks = Bank::all();
        return view('bank.index', compact('banks'));
        
    }

    /**
     * Show the form for creating a new resource.
     * create (menambahkan data)
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     * create (menambahkan data)/menyimpan data
     */
    public function store(Request $request)
    {
        $bank = new Bank;
        $bank->names = $request->names;
        $bank->reks = $request->reks;
        $bank->logo = $request->logo;
        $bank->save();

        return redirect('/bank');
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
