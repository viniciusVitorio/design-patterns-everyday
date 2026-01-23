<?php

namespace App\Decorator\Notification;

class RetryNotification extends NotificationDecorator
{
    public function send(string $message): void
    {
        echo "Retry> Attempting to send\n";

        $this->notification->send($message);
    }
}