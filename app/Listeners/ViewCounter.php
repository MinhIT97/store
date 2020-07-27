<?php

namespace App\Listeners;

use Illuminate\Session\Store;

class ViewCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $model = $event->data;
        if (!$this->isPostViewed($model)) {
            $model->increment('view');
            $this->storePost($model);
        }
    }

    private function isPostViewed($post)
    {
        $viewed = $this->session->get('view' . $post->type . $post->id, []);


        return 'view' . $post->type . $post->id === $viewed;
    }

    private function storePost($post)
    {
        $key = 'view' . $post->type . $post->id;
        $this->session->put($key,  $key);
    }
}
