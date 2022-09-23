<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'pass' => 'required',
        ];
    }



    /**
     * Esto es para validar si el campo "nombre" es del mismo del usuario
     * Ya que no hay ningun campo de usuario creado, se usa "nombre" como usuario
     * Con esto podemos hacer login tanto con email como con usuario, o en este caso, nombre
     */
    public function getCredentials(){
        $nombre = $this->get('nombre');

        if($this->isEmail($nombre)){
            return [
                'email' => $nombre,
                'pass' => $this->get('pass')
            ];
        }
        return $this->only('nombre', 'pass');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['nombre' => $value], ['nombre'=>'email'])->fails();
    }
}
