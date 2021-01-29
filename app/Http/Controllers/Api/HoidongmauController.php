<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\HoiDongMau;
use Illuminate\Http\Request;

class HoidongmauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hoidongmau = Models\HoiDongMau::latest()->paginate(25);

        return $hoidongmau;
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
        
        $hoidongmau = Models\HoiDongMau::create($request->all());

        return response()->json($hoidongmau, 201);
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
        $hoidongmau = Models\HoiDongMau::findOrFail($id);

        return $hoidongmau;
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
        
        $hoidongmau = Models\HoiDongMau::findOrFail($id);
        $hoidongmau->update($request->all());

        return response()->json($hoidongmau, 200);
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
        Models\HoiDongMau::destroy($id);

        return response()->json(null, 204);
    }
}
