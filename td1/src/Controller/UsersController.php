<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Service\ContactSessionManager;
use App\Model\Contact;
use Doctrine\DBAL\Schema\View;

class UsersController extends Controller
{
    /**
     * @Route("/contacts", name="contacts")
     */
    public function index(ContactSessionManager $contactSessionManager)
    {
        $contactSessionManager->insert(new Contact());
        $contacts=$contactSessionManager->getAll();
        // replace this line with your own code!
        return $this->render('Users/index.html.twig', ["contacts"=>$contacts, "nbContact"=>$contactSessionManager->count()]);
    }
    
    /**
     * @Route("/contacts/new", name="contact_new")
     */
    public function contactNew(){
        return $this->render('Users/contact-frm.html.twig',["contact"=>new Contact(), "title"=>"Ajout de contact"]);
    }
    
    /**
     * @Route("/contact/update", name="contact_update", methods={"POST"})
     */
   public function contactUpdate(){
        return new Response("Update");
    }
}
