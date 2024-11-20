<?php

namespace App\Http\Controllers;

use App\Models\interviewee;
use Illuminate\Http\Request;

class intervieweeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //LIST OF INTERVIEWEE
        $data = interviewee::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if ($data == null) {
            return response()->json([
                "message" => "empty request"
            ], 400);
        } else {
            interviewee::create($data);
            return response()->json([
                "message" => "student information successfully created"
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = interviewee::where('id', $id)->first();
        if ($data == null) {
            return response()->json([
                "message" => "intervewee not found"
            ], 404);
        } else {
            return response()->json($data, 200);
        }
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
        $data = interviewee::where('id', $id)->delete();
        return response()->json([
            "message" => "intervewee information successfully deleted"
        ], 200);
    }
}