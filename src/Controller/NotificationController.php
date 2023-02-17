<?php
namespace App\Controller;
use Pimcore\Model\Notification\Service\NotificationService;
Class NotificationController{ 
    public function sendNotification(NotificationService $notificationService)
     {
        $notificationService->sendToUser(
            
              6,
              2,
              'object created', 
              'object successfully created using csv',
            );
         }}


