<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ThamGiaSk;
use Illuminate\Http\Request;

class ThamgiaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $thamgiask = Models\ThamGiaSk::latest()->paginate(25);

        return $thamgiask;
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
        
        $thamgiask = Models\ThamGiaSk::create($request->all());

        return response()->json($thamgiask, 201);
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
        $thamgiask = Models\ThamGiaSk::findOrFail($id);

        return $thamgiask;
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
        
        $thamgiask = Models\ThamGiaSk::findOrFail($id);
        $thamgiask->update($request->all());

        return response()->json($thamgiask, 200);
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
        Models\ThamGiaSk::destroy($id);

        return response()->json(null, 204);
    }
}
