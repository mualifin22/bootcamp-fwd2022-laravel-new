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

   // one To Many
   public function specialist()
   {
       // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
       return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
   }

   // one To Many
   public function doctor()
   {
       // 2 parameters (path model, field foreign key)
       return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
   }
}
