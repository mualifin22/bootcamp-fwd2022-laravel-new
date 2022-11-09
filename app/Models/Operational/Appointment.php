<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'appointment';

    // this field must type date yyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

// one To Many
   public function specialist()
   {
       // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
       return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
   } 
   
   // one To Many
   public function consultation()
   {
       // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
       return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
   }  
   
   // one To Many
   public function user()
   {
       // // 3 parameters (path model, field foreign key, field primary key from model hasMany/hasOne)
       return $this->belongsTo('App\Models\User', 'user_id', 'id');
   }

   // one to many
   public function transaction()
   {
       // 2 parameters (path model, field foreign key)
       return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
   }
}