<?php

namespace App\Http\Requests;

use App\Models\Attendy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAttendyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('attendy_create');
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
