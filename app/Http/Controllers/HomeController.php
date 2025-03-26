<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menghitung nilai dari daftar angka
        $calculate = $this->calculate([1, 5, 3, 2, 5, 2, 1, 1]);

        // Mengirimkan hasil ke tampilan "home"
        return view('home', $calculate);
    }

    /**
     * Menghitung nilai minimum, maksimum, dan angka ganjil dari daftar angka.
     * 
     * @param array $listOfInteger Daftar angka yang akan dihitung
     * @return array Hasil perhitungan
     */
    private function calculate(array $listOfInteger): array
    {
        $min = min($listOfInteger);
        $max = max($listOfInteger);
        
        // Menyaring angka ganjil dan mengatur ulang indeks array
        $odd = array_values(array_filter($listOfInteger, fn($value) => $value % 2 !== 0));

        return compact('listOfInteger', 'min', 'max', 'odd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
