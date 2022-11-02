<?php

namespace App\Http\Requests\Event;

use App\Models\MasterData\Event;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

use Gate;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
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

            
            'name' => [
                'required', 'string', 'max:255','unique:event',
            ],
            'poster' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:10000',
            ]
        ];
    }
}
