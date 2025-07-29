<?php

namespace App\Http\Controllers;

use App\Enums\DayOfWeekStudyPlanEnum;
use App\Http\Requests\StudyPlan\StoreStudyPlanRequest;
use App\Models\StudyPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studyPlans = Auth::user()->studyPlans;
        return response()->json([
            'message' => $studyPlans->count() > 0 ? 'All study plans' : 'No study plan found',
            'data' => $studyPlans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudyPlanRequest $request)
    {
        $body = $request->only('title', 'description', 'day_of_week', 'start_time', 'end_time', 'subject');
        $body['user_id'] = Auth::id();
        $body['day_of_week'] = DayOfWeekStudyPlanEnum::getValues()[$body['day_of_week']];
        StudyPlan::create($body);
        return response()->json([
            'message' => 'Study plan created with success!',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyPlan $studyPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyPlan $studyPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyPlan $studyPlan)
    {
        //
    }
}
