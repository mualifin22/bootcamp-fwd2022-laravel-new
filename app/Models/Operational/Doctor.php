<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
   // use HasFactory;
   use SoftDeletes;

   // declare table
   public $table = 'doctor';

   // this field must type date yyy-mm-dd hh:mm:ss
   protected $date = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   // declare fillable
   protected $fillable = [
       'specialist_id',
       'name',
       'fee',
       'photo',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

}
