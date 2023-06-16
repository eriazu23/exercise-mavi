<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'client_navi';
    protected $primaryKey = 'id';
    protected $fillable = ['client_name','client_last_name','client_last_name_two','client_adress','mail'];
    protected $save = [];
    public $timestamps = false;

}
