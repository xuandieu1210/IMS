<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ChamDiem;
use Illuminate\Http\Request;

class ChamdiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chamdiem = Models\ChamDiem::latest()->paginate(25);

        return $chamdiem;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $chamdiem = Models\ChamDiem::create($request->all());

        return response()->json($chamdiem, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chamdiem = Models\ChamDiem::findOrFail($id);

        return $chamdiem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $chamdiem = Models\ChamDiem::findOrFail($id);
        $chamdiem->update($request->all());

        return response()->json($chamdiem, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Models\ChamDiem::destroy($id);

        return response()->json(null, 204);
    }
}
