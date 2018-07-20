<?php

namespace SuperCommBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@SuperComm/Default/index.html.twig');
    }

    public function conseilMinuteAction()
    {
        return $this->render('@SuperComm/Default/conseil_minute.html.twig');
    }

    public function offresAction()
    {
        return $this->render('@SuperComm/Default/offres.html.twig');
    }

    public function expertsAction()
    {
        return $this->render('@SuperComm/Default/experts.html.twig');
    }

    public function ressourcesAction()
    {
        return $this->render('@SuperComm/Default/ressources.html.twig');
    }

    public function inscriptionAction()
    {
        return $this->render('@SuperComm/Default/form_inscription.html.twig');
    }
}
