<?php

namespace App\Decorator\Notification;

interface NotificationInterface
{
    public function send(string $message);
}