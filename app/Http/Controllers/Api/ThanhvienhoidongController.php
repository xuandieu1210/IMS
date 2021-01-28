<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ThanhVienHoiDong;
use Illuminate\Http\Request;

class ThanhvienhoidongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $thanhvienhoidong, = Models\ThanhVienHoiDong::latest()->paginate(25);

        return $thanhvienhoidong,;
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
        
        $thanhvienhoidong, = Models\ThanhVienHoiDong::create($request->all());

        return response()->json($thanhvienhoidong,, 201);
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
        $thanhvienhoidong, = Models\ThanhVienHoiDong::findOrFail($id);

        return $thanhvienhoidong,;
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
        
        $thanhvienhoidong, = Models\ThanhVienHoiDong::findOrFail($id);
        $thanhvienhoidong,->update($request->all());

        return response()->json($thanhvienhoidong,, 200);
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
        Models\ThanhVienHoiDong::destroy($id);

        return response()->json(null, 204);
    }
}
