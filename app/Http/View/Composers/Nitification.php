<?php

namespace App\Http\View\Composers;

use App\Repositories\NotificationRepository;
use Illuminate\View\View;

class Nitification
{

    protected $notificationRepository;

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->entity = $notificationRepository->getEntity();
    }

    public function compose(View $view)
    {
        $notifications = $this->entity->where('type','App\Notifications\OrderProductNotification')->limit(5)->latest()->get();
        $view->with('notifications', $notifications);
    }
}
