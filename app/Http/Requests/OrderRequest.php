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
            'email' => 'required|email',
            'fullname' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'note' => 'nullable|string|max:500',
            'order_date' => 'required|date|after_or_equal:today',
            'numberOfPeople' => 'required|array|min:1',
            'guest-type' => 'required|array|min:1',
            'time' => 'required|date_format:h:i A',
            'total_money' => 'required|numeric|min:0',
            'down_payment' => 'required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'fullname.required' => 'Vui lòng nhập họ và tên.',
            'fullname.string' => 'Họ và tên phải là chuỗi ký tự.',
            'fullname.max' => 'Họ và tên không được vượt quá 255 ký tự.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không hợp lệ, chỉ được chứa từ 10 đến 15 chữ số.',
            'note.string' => 'Ghi chú phải là chuỗi ký tự.',
            'note.max' => 'Ghi chú không được vượt quá 500 ký tự.',
            'order_date.required' => 'Vui lòng chọn ngày.',
            'order_date.date' => 'Ngày không hợp lệ.',
            'order_date.after_or_equal' => 'Ngày phải từ hôm nay trở đi.',
            'numberOfPeople.required' => 'Vui lòng nhập số lượng người.',
            'numberOfPeople.array' => 'Số lượng người phải là một mảng.',
            'numberOfPeople.min' => 'Phải có ít nhất 1 người.',
            'guest-type.required' => 'Vui lòng chọn loại khách.',
            'guest-type.array' => 'Loại khách phải là một mảng.',
            'guest-type.min' => 'Phải có ít nhất một loại khách.',
            'time.required' => 'Vui lòng chọn giờ.',
            'time.date_format' => 'Thời gian không đúng định dạng. Định dạng hợp lệ là giờ:phút AM/PM (ví dụ: 10:00 AM).',
        
            'total_money.required' => 'Vui lòng nhập tổng số tiền.',
            'total_money.numeric' => 'Tổng số tiền phải là số.',
            'total_money.min' => 'Tổng số tiền không được nhỏ hơn 0.',
            'down_payment.required' => 'Vui lòng nhập số tiền đặt cọc.',
            'down_payment.numeric' => 'Số tiền đặt cọc phải là số.',
            'down_payment.min' => 'Số tiền đặt cọc không được nhỏ hơn 0.',
        ];
    }
}
