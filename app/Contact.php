<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    public function lista(){
        return (object)[
        'Nome'=>'Luis Eduardo',
        'Telefone'=>'(085) 99977-8697',
        'Rua'=>'Paulo Firmeza',
        'Numero'=>'793',
        'Complemento'=>'AP 403, BL B'
        ];
    }
}
