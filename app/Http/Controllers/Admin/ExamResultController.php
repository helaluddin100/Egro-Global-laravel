<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExamResult;

class ExamResultController extends Controller
{

    public function examResult()
    {
        $examResults = ExamResult::all();
        return view('admin.exam-result.index', compact('examResults'));
    }
}
