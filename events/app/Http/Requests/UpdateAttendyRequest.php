<?php

namespace App\Http\Requests;

use App\Models\Attendy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAttendyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('attendy_edit');
    }

    public function rules()
    {
        return [
            'participant_id' => [
                'required',
                'integer',
            ],
            'events.*' => [
                'integer',
            ],
            'events' => [
                'required',
                'array',
            ],
        ];
    }
}
