<?php

namespace MiLibreria;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    //
    protected $table = 'libros';
    protected $fillable = ['titulo', 'id_autor','id_editorial', 'id_tema', 'user_id'];
}
