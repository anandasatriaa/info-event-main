<?php

namespace App\Http\Requests\RequestEvent;

use App\Models\Operational\RequestEvent;
// use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRequestEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => [
                'required', 'integer',
            ],
            'role' => [
                'required', 'string', 'max:255',
            ],
            'instance' => [
                'required', 'string', 'max:255',
            ],
            'event_name' => [
                'required', 'string', 'max:255','unique:request_event',
            ],
            'category' => [
                'required', 'string', 'max:255',
            ],
            'invite_group_link' => [
                'required', 'string', 'max:255',
            ],
            'date_is_held' => [
                'required', 'string', 'max:255',
            ],
            'description' => [
                'required', 'string', 'max:10000',
            ],
            'poster' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:10000',
            ],
        ];
    }
}
