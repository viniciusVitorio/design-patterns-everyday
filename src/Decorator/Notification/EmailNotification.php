<?php

namespace App\Decorator\Notification;

class EmailNotification implements NotificationInterface
{
    public function send(string $message)
    {
        echo "Email : " . $message . "\n";
    }
}