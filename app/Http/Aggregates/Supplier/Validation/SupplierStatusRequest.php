<?php namespace App\Http\Requests;

class SupplierRegisterRequest extends Request
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
            'status' => 'required|in:ACTIVATE,DEACTIVATE',
        ];
    }

    public function messages()
    {
        return [
            'status.required' => trans('supplier.status_required'),
            'status.in' => trans('supplier.status_must_be_one_of_ACTIVATE_DEACTIVATE'),
        ];
    }
}
