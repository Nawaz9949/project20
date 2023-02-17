<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject\Email;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
 
    public function defaultAction(Request $request): Response
    {
        $params = array('firstName' => 'Pim',
                'lastName' => 'Core',
                // 'product' => \Pimcore\Model\DataObject::getById(73613)
                );
 
//sending the email
$mail = new \Pimcore\Mail();
$mail->to('example@pimcore.org');
$mail->setDocument('/Email/email');
$mail->setParams($params);
$mail->send();
        return $this->render('email/emailDocument.html.twig');
    }
}
