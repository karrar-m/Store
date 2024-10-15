<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
   

  
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',     
            'description' => 'required|string',    
            'price' => 'required|numeric|min:0', 
            'quantity' => 'required|integer|min:0', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',           
        ];
    }
}
