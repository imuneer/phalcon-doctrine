<?php

use Models\Customer;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    	$em = $this->di['entityManager'];
    	$c = new Customer();
    	$c->setLabel("Customer - " . rand());

    	$em->persist($c);
    	$em->flush();

    	$customers = $em->getRepository('Models\Customer')->findAll();
    	$this->view->customers = $customers;
    }

}

