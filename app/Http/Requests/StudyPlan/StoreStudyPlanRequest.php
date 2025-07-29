<?php

namespace App\Http\Requests\StudyPlan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreStudyPlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|required|min:8|max:255',
            'description' => 'string|min:12',
            'day_of_week' => 'required|integer|min:0|max:6',
            'start_time' => 'string|required|date_format:H:i|before:end_time',
            'end_time' => 'string|required|date_format:H:i',
            'subject' => 'string|required|min:8|max:255',
        ];
    }
}
