<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'role';

    public function getAllRoles()
    {
        return Role::all();
    }
}
