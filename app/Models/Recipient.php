<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Recipient extends Pivot
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $casts=[
        'read_at'=>'datetime'
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    } 
    public function messages()
    {
        return $this->belongsTo(Message::class);
    } 
}
