<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *@return bool
     */

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'password' =>'required',
        ];
    }

    public function getCredencials(){
        $username = $this->get('username');
        
        if($this->isEmail($username)){
            return [
                'email' => $username,
                'password' => $this->get('password'),
        ];
        } 
        return $this->only('username', 'password');   
    }

    public function isEmail($value){
        $factory = $this->container->make(validationFactory::class);
        return !$factory->make(['username' => $value] , ['username' => 'email'])->fails();
    }
}