<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\LinhVuc;
use Illuminate\Http\Request;

class LinhvucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $linhvuc = Models\LinhVuc::latest()->paginate(25);

        return $linhvuc;
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
        
        $linhvuc = Models\LinhVuc::create($request->all());

        return response()->json($linhvuc, 201);
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
        $linhvuc = Models\LinhVuc::findOrFail($id);

        return $linhvuc;
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
        
        $linhvuc = Models\LinhVuc::findOrFail($id);
        $linhvuc->update($request->all());

        return response()->json($linhvuc, 200);
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
        Models\LinhVuc::destroy($id);

        return response()->json(null, 204);
    }
}
