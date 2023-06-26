<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

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
/**
     * Get the needed authorization credentials from the request.
     *
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getCredentials(){
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
        $factory = $this->container->make(ValidationFactory::class);
        return ! $factory->make(['username' => $value], ['username' => 'email'])->fails();
    }
}