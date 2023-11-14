<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Database\Eloquent\Builder;


class MessageCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Create a new event instance.
     *
     * @param \App\Models\Message $message
     * 
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message=$message;
        // dd($this->message);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $other_part=$this->message->conversations->participants()
                         ->where('user_id','<>',$this->message->user_id)
                         ->first();
        return new PresenceChannel('Messenger.' . $other_part->id );
    }
}
