<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $fillable = ['nombre', 'email', 'edad', 'pass', 'pass_confirmation'];

    public function setpassAttribute($value){
        $this->attributes['pass'] = bcrypt($value);
    }

    public function setpass_confirmationAttribute($value){
        $this->attributes['pass_confirmation'] = bcrypt($value);
    }
}
