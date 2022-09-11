<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = true;
    const CREATED_AT = 'creation_date';
    protected $fillable = [
        'id',
        'name',
        'surname',
        'email',
        'password',
        'creation_date',
    ];
    public static function create( $name, $surname, $email, $password){
        DB::table('customers')->insert([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => md5($password),
        ]);
    }
}

