<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calculate = $this->calculate([1,5,3,2,5,2,1,1]);

        return view('home', $calculate);
    }

    public function calculate($listOfInteger) {
        $min = min($listOfInteger);
        $max = max($listOfInteger);
        $odd = Arr::where($listOfInteger, function ($value, $key) {
            return $value % 2 !== 0;
        });
        $odd = array_values($odd);

        return compact(
            'listOfInteger',
            'min',
            'max',
            'odd'
        );
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
