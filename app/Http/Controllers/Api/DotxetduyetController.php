<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\DotXetDuyet;
use Illuminate\Http\Request;

class DotxetduyetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dotxetduyet = Models\DotXetDuyet::latest()->paginate(25);

        return $dotxetduyet;
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
        
        $dotxetduyet = Models\DotXetDuyet::create($request->all());

        return response()->json($dotxetduyet, 201);
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
        $dotxetduyet = Models\DotXetDuyet::findOrFail($id);

        return $dotxetduyet;
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
        
        $dotxetduyet = Models\DotXetDuyet::findOrFail($id);
        $dotxetduyet->update($request->all());

        return response()->json($dotxetduyet, 200);
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
        Models\DotXetDuyet::destroy($id);

        return response()->json(null, 204);
    }
}
