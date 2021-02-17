<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /* protected $table = null;
    protected $primarykey = null;
    */
    public $timestamps = false;
    //const CREATED_AT = null;
    //const UPDATED_AT = null;
    //const CREATED_AT = 'create_time';
    //const UPDATED_AT = 'update_time';
}
