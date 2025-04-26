<?php

namespace App\Listeners;

use App\Events\updatePostCount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdatePostsCount
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(updatePostCount $event): void
    {
        $user = $event->post->user;
        $user->increment('posts_count');
        //
    }
}
