<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'permission_role';

    // this field must type date yyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one To Many
    public function permission()
    {
        // // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
        return $this->belongsTo('App\Models\User', 'permission_id', 'id');
    }
 
    // one To Many
    public function role()
    {
        // // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
