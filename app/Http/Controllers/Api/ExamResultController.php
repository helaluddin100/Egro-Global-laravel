<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\ExamResult;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation error custom messages
        $messages = [
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'This email has already been used to submit responses. Please check your inbox for the recommendations.',
        ];

        // Input validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:exam_results,email',
            'company_name' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'employe_based' => 'nullable|string|max:255',
            'result_points' => 'nullable|string|max:255',
        ], $messages);

        // Save the data
        try {
            $examResult = ExamResult::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'designation' => $request->designation,
                'employe_based' => $request->employe_based,
                'result_points' => $request->result_points,
            ]);

            // If successful, return a success response
            return response()->json([
                'success' => true,
                'message' => 'Data submitted successfully!',
                'result_points' => $examResult->result_points,
            ], 200);  // 200 indicates a successful request
        } catch (\Exception $e) {
            // In case of any error during the process
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit data. Please try again.',
                'error' => $e->getMessage(),
            ], 500);  // 500 indicates a server error
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function show(ExamResult $examResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamResult $examResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamResult $examResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamResult $examResult)
    {
        //
    }
}
