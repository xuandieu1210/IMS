<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\DmXepHang;
use Illuminate\Http\Request;

class DmxephangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dmxephang = Models\DmXepHang::latest()->paginate(25);

        return $dmxephang;
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
        
        $dmxephang = Models\DmXepHang::create($request->all());

        return response()->json($dmxephang, 201);
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
        $dmxephang = Models\DmXepHang::findOrFail($id);

        return $dmxephang;
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
        
        $dmxephang = Models\DmXepHang::findOrFail($id);
        $dmxephang->update($request->all());

        return response()->json($dmxephang, 200);
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
        Models\DmXepHang::destroy($id);

        return response()->json(null, 204);
    }
}
