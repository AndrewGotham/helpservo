<?php

namespace App\Http\Requests\Admin;

use App\Models\Priority;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePriorityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('priority_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
