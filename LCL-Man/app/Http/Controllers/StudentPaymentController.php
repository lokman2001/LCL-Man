<?php

namespace App\Http\Controllers;

use App\Models\student_payment;
use Illuminate\Http\Request;

class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = student_payment::all();
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
            ], 200);
        } else {
            student_payment::create($data);
            return response()->json([
                "message" => "payment successfully updated"
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(student_payment $student_payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student_payment $student_payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student_payment $student_payment)
    {
        //
    }
}