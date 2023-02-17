<?php
namespace App\EventListener;
use App\Controller\NotificationController;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\Notification\Service;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\OrderDetails;
use Pimcore\Model\DataObject\Brand;

class Validate{
public function beforeUpdate(\Pimcore\Event\Model\DataObjectEvent $event)
 {
     $object = $event->getObject();
      if ($object instanceof OrderDetails) {
       if ($object->getOrderDate() > $object->getDeliveryDate()) {
            
             throw new \Exception("Order Date cannot be GREATER than Delivery Date.");
             }
     }
     }
     public function notificationListener(\Pimcore\Event\Model\DataObjectEvent $event)
     { 
        $object = $event->getObject();
         if ($object instanceof Brand) {
         $furn = new NotificationController;
          $userService = new Service\UserService;
           $notificationService = new NotificationService($userService);
           $furn->sendNotification($notificationService);
     }
     }
    }
    

   
