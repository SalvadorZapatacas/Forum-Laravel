<?php

namespace App\Http\Requests;

use App\Thread;
use Illuminate\Foundation\Http\FormRequest;

class UpdateThreadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $thread = Thread::findOrFail($this->route()->parameter('thread'));

        return $this->user()->id == $thread->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:3',
        ];
    }
}
