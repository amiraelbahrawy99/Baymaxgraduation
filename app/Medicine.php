<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model

{
    protected $fillable = [
       ' user_id','medicineName','locationNum','durationInDays','timesNum','numOfDose'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
