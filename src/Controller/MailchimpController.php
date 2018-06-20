<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Welp\MailchimpBundle\Event\SubscriberEvent;
use Welp\MailchimpBundle\Subscriber\Subscriber;

class MailchimpController extends Controller
{

    /**
     * @Route("/mailchimp", name="mailchimp")
     */
    public function newUser(Request $request)
    {
        $subscriber = new Subscriber($request->request->get('request'));
        $list = $request->request->get('list');

        $this->container->get('event_dispatcher')->dispatch(
            SubscriberEvent::EVENT_SUBSCRIBE,
            new SubscriberEvent($list, $subscriber)
        );

        return $this->render('mailchimp/index.html.twig', [
            'controller_name' => 'MailchimpController',
        ]);
    }
}
