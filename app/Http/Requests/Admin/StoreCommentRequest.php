<?php

namespace App\Http\Requests\Admin;

use App\Models\Comment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'author_name'  => [
                'required',
            ],
            'author_email' => [
                'required',
            ],
            'comment_text' => [
                'required',
            ],
        ];
    }
}
