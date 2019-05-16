<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassPracitce extends Model
{
    protected $table = 'clases_Practice';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_class';
}
