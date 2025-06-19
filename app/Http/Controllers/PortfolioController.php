<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        logger($request->keyword); // storage/logs/laravel.log
        logger('Helo');
        //logger($request->keyword); // storage/logs/laravel.log

        logger('疲れれるぜ！');
        logger('Heloworlds');
        logger("#########end#######");
        logger($portfolios = Portfolio::all()->toArray());

        return response()->json($portfolios);
    }

    public function getCategories()
    {
        return response()->json(PortfolioCategory::all());
    }

    /**
     * Show the form for creating a new resource.s
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
