<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactSessionManager implements IModelManager{
    
    const KEY='contacts';
    
    /**
     * @var SessionInterface
     */
    private $session;
    
    public function __construct(SessionInterface $session){
        $this->session=$session;
    }
    
    public function updateSession($values){
        $this->session->set(self::KEY, $values);
    }
    
    public function getAll(){
        return $this->session->get(self::KEY, []);
    }

    public function select($indexes){
        
    }

    public function get($index){
        
    }

    public function count(){
        return sizeof($this->getAll());
    }

    public function insert($object){
        $contacts = $this->getAll();
        $contacts[] = $object;
        $this->updateSession($contacts);
    }

    public function update($object, $values){
        
    }

    public function filterBy($keyAndValues){
        
    }

    public function delete($indexes){
        
    }
}