<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'type_user';

    // this field must type date yyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one To Many
    public function detail_user()
    {
        // 2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'Type_user_id');
    }
}
