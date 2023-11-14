<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['user_id','message','conversation_id','type'];
    public function users()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name'=>__('User')
        ]);
    }
    public function conversations()
    {
        return $this->belongsTo(Conversation::class,'conversation_id','id');
    }
    public function recipients()
    {
        return $this->belongsToMany(User::class,'recipients')->withPivot([
            'read_at','deleted_at'
        ]);
    }
}
