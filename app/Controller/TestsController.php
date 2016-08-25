<?php
class TestsController extends AppController {
	function index(){
		$tests = $this->Test->find('all');
		$this->set('tests',$tests);
	}
	function add(){	
	$test = $this->Test->find('first', array(
											'order' => array(
														'Test.id' => 'desc')));
			$code = $test['Test']['code'];
			$codeoato = $code + 1;
			
		if($this->request->is('post')){
		$this->Test->create();
		
			if($this->Test->save($this->request->data)){
				
				$this->Test->saveField('code', $codeoato);
				
				$this->redirect('index');
			
			}
		}
	}
	function view($id){
		$i = 1;
		$findTest = $this->Test->findById($id);
		
		//pr($findTest);
		//echo '---------------------------------------------------'; 
		
        $test_id = $findTest['Test']['id'];
        $test_code = $findTest['Test']['code'];
		
		$refer = $this->Test->find('all',array(
								'conditions' => array('Test.refer' => $test_code)));
		//pr($refer);
		//echo '---------------------------------------------------'; 
		
		foreach($refer as $refers){
			//pr($refer);exit;
			//pr($refers);exit;
			$re_code = $refers['Test']['code'];
			$refertwo = $this->Test->find('all',array(
								'conditions' => array('Test.refer' => $re_code)));
			//pr($refertwo);exit;
			foreach($refertwo as $refertwos){
				$re_codethree = $refertwos['Test']['code'];
				//pr($re_codethree);exit;
				$referthree = $this->Test->find('all',array(
								'conditions' => array('Test.refer' => $re_codethree)));
				//pr($referthree);exit;
				
			}
			
		}
		
		$this->set('tests', $findTest);
	}
		
}

