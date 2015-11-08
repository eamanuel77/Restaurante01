<?php 

namespace App\Controller;

class MeserosController extends AppController {
    
    public function index() {
        
        $this->set('meseros', $this->Meseros->find('all'));
        
    }

    public function view($id = null){

    	$meseros = $this->Meseros->get($id);
    	$this->set(compact('meseros'));

    	if(!$meseros) {
    			
    	}

    }

    public function add(){

    	//Envio de Datos
         $meseros = $this->Meseros->newEntity();
        if ($this->request->is('post')) {
            $meseros = $this->Meseros->patchEntity($meseros, $this->request->data);
            if ($this->Meseros->save($meseros)) {
                $this->Flash->success(__('Mesero Guardado con Exito!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No pudimos Gardar el Mesero.'));
        }
        $this->set('meseros', $meseros);
  	}
    
    
    
    
}