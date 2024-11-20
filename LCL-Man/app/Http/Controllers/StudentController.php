<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = student::all();
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
            student::create($data);
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
        $data = student::where('id', $id)->first();
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        if ($data == null) {
            return response()->json([
                "message" => "empty request"
            ], 400);
        } else {
            student::where('id', $id)->update($data);
            return response()->json([
                "message" => "student information successfully updated"
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        student::where('id', $id)->delete();
        return response()->json([
            "message" => "student information successfully deleted"
        ], 200);
    }
}
