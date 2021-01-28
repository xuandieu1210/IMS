<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\FileDinhKem;
use Illuminate\Http\Request;

class FiledinhkemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filedinhkem, = Models\FileDinhKem::latest()->paginate(25);

        return $filedinhkem,;
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
        
        $filedinhkem, = Models\FileDinhKem::create($request->all());

        return response()->json($filedinhkem,, 201);
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
        $filedinhkem, = Models\FileDinhKem::findOrFail($id);

        return $filedinhkem,;
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
        
        $filedinhkem, = Models\FileDinhKem::findOrFail($id);
        $filedinhkem,->update($request->all());

        return response()->json($filedinhkem,, 200);
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
        Models\FileDinhKem::destroy($id);

        return response()->json(null, 204);
    }
}
