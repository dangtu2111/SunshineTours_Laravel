<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "datetime" => 'required|date_format:Y-m-d',

            // numberOfPeople should be an array with at least 1 element
            "numberOfPeople" => 'required|array|min:1',

            // guest-type should be an array with at least 1 element
            "guest-type" => 'required|array|min:1',

            // vip, video, and car-bus should be numeric (either 0 or 1), nullable
            "vip" => 'nullable|in:0,1',
            "video" => 'nullable|in:0,1',
            "car-bus" => 'nullable|in:0,1',

            // time should be an array with at least 1 element
            "time" => 'required|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            // Custom messages for each validation rule
            'datetime.required' => 'The date is required.',
            'datetime.date_format' => 'The date format must be YYYY-MM-DD.',

            'numberOfPeople.required' => 'The number of people is required.',
            'numberOfPeople.array' => 'The number of people must be an array.',
            'numberOfPeople.min' => 'The number of people must contain at least one value.',

            'guest-type.required' => 'The guest type is required.',
            'guest-type.array' => 'The guest type must be an array.',
            'guest-type.min' => 'The guest type must contain at least one value.',

            'vip.nullable' => 'VIP status is optional.',
            'vip.in' => 'VIP status must be either 0 or 1.',

            'video.nullable' => 'Video option is optional.',
            'video.in' => 'Video option must be either 0 or 1.',

            'car-bus.nullable' => 'Car/Bus option is optional.',
            'car-bus.in' => 'Car/Bus option must be either 0 or 1.',

            'time.required' => 'The time is required.',
            'time.min' => 'The time must contain at least one value.',
        ];
    }
}
