<?php 

namespace App\Controller;

class MeserosController extends AppController {
    
    public function index() {
        
        $this->set('meseros', $this->Meseros->find('all'));
        
    }

    public function add(){
    	
    }
    
}