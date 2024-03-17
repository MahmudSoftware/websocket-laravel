<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ScoreEvent implements ShouldBroadcast

{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $scoreValue;
    /**
     * Create a new event instance.
     */
    public function __construct($scoreValue)
    {
        $scoreValue = $this->scoreValue;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        // return [
        //     new PrivateChannel('channel-name'),
        // ];

        return ['score-channel'];
    }

    public function broadcastAs()
    {
        // return [
        //     new PrivateChannel('channel-name'),
        // ];

        return 'score-channel';
    }
}
