<?php 

	class TopicsController extends AppController {

		public $components = ['Flash'];

		public function index() {
			$data = $this->Topic->find('all');
			$this->set('topics', $data);
		}

		public function add() {
			if($this->request->is('post')) {
				$this->Topic->Create();
				if($this->Topic->save($this->request->data)) {
					$this->Flash->set('The topic has been created!');
					$this->redirect('index');
				}
			}
		}
	}