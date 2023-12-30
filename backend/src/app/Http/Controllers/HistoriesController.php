<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump("Happy hacking!");
        die;
    }


    /**
     * get 1 random data from histories
     *
     * @return \Illuminate\Http\Response
     */
    public function getRandomHistories()
    {
        Log::alert(
            'getRandomHistories'
        );
        $histories = new Histories();
        $history = $histories->getRandom();
        return $history;;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function show(Histories $histories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function edit(Histories $histories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Histories $histories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Histories $histories)
    {
        //
    }
}
