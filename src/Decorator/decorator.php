<?php

use App\Decorator\Notification\EmailNotification;
use App\Decorator\Notification\RetryNotification;

require '../../vendor/autoload.php';


$notification = new EmailNotification();
$notification = new RetryNotification($notification);

$notification->send("Hello Decorator");