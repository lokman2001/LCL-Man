<?php

namespace App\Http\Controllers;

use App\Models\interview_quize_q;
use Illuminate\Http\Request;

class interviewQuizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //QUIZES LIST
        $data = interview_quize_q::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Generatoing id
        $quizeId = uniqid() . "LCLinterviewQuize";

        //Make data set and store to DB
        $dataForQuestion = $this->quizeQuestionData($quizeId, $request);
        interview_quize_q::create($dataForQuestion);

        //Message
        $message = 'Quize Successfully Created ';

        return response()->json($message, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SEE DETAIL
        $data = interview_quize_q::where("quize_id", $id)->first();

        if ($data == null) {
            $message = "not exist in Database";
            return response()->json($message, 200);
        } else {
            return response()->json($data, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //UPDATE QUIZE
        $data = interview_quize_q::where("quize_id", $id)->first();
        $data->update($request->all());
        $message = "Quize Successfully Updated";
        return response()->json($message, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //DELETE QUIZE
        $data = interview_quize_q::where("quize_id", $id)->first();
        if ($data == null) {
            $message = $id . " is not in list";
        } else {
            $message = 'Quize Successfully Deleted ';
            $data->delete();
        }
        return response()->json($message, 200);
    }

    // public function dataValidation($data){

    // }

    private function quizeQuestionData($quizeId, $data)
    {
        return [
            'quize_id' => $quizeId,
            'question' => $data->question,
            'correct_answer' => $data->correctAnswer,
            'answer1' => $data->answer1,
            'answer2' => $data->answer2,
            'answer3' => $data->answer3,
            'answer4' => $data->answer4,
        ];
    }
}
