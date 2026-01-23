<?php

namespace App\Decorator\Notification;

abstract class NotificationDecorator implements NotificationInterface
{
    protected NotificationInterface $notification;

    public function __construct($notification)
    {
        $this->notification = $notification;
    }
}