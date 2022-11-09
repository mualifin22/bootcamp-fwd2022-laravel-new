<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
     // use HasFactory;
   use SoftDeletes;

   // declare table
   public $table = 'transaction';

   // this field must type date yyy-mm-dd hh:mm:ss
   protected $date = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   // declare fillable
   protected $fillable = [
       'appointment_id',
       'fee_doctor',
       'fee_specialist',
       'fee_hospital',
       'sub_total',
       'vat',
       'total',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   // one to one
   public function specialist()
   {
       // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
       return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
   }    
}
