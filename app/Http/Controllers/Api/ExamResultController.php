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
        // ইনপুট ভ্যালিডেশন
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:exam_results,email',
            'company_name' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'employe_based' => 'nullable|string|max:255',
            'result_points' => 'nullable|string|max:255',
        ]);

        // ডাটা সেভ করা
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

        // রেসপন্স প্রদান
        return response()->json([
            'success' => true,
            'result_points' => $examResult->result_points,
        ]);
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
