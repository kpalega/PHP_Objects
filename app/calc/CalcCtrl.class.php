<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;
    
    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    public function getParams() {
	$this->form->height = isset($_REQUEST ['height']) ? $_REQUEST ['height'] : null;
	$this->form->weight = isset($_REQUEST ['weight']) ? $_REQUEST ['weight'] : null;
	$this->form->meter = isset($_REQUEST ['meter']) ? $_REQUEST ['meter'] : null;
    }
    
    public function validate(){
	
	if (! (isset($this->form->height) && isset($this->form->weight) && isset($this->form->meter))) {
		return false;
	}
        
        $this->msgs->addInfo("Przekazano parametry.");
	
        if ( $this->form->height == "") {
            $this->msgs->addError ('Nie podano wzrostu.');
        }
	if ( $this->form->weight == "") {
            $this->msgs->addError ('Nie podano wagi.');
        }
	if (! $this->msgs->isError()) {
	
            if(! is_numeric( $this->form->height )){ 
                $this->msgs->addError('Wzrost nie jest liczbą');
            }
            
            if(! is_numeric( $this->form->weight )) {
                $this->msgs->addError('Waga nie jest liczbą');
            }
        
	}
        return ! $this->msgs->isError();
        
    }
    
    public function process(){
	
    $this->getParams();
    if ($this->validate()) {
        
	$this->form->height = doubleval($this->form->height);
	$this->form->weight = doubleval($this->form->weight);
        $this->msgs->addInfo("Parametry poprawne.");
	
	switch ($this->form->meter) {
            case 'cm' :
		$this->form->height = $this->form->height/100;
		$this->result->result = $this->form->weight/($this->form->height*$this->form->height);
                $this->form->height = $this->form->height*100;
                $this->result->op = 'w centymetrach';
		break;
            case 'm' :
		$this->result->result = $this->form->weight/($this->form->height*$this->form->height);
                $this->result->op = 'w metrach';
                break;		
	}
        $this->msgs->addInfo("Wykonano oblicznia.");
    }
    $this->generateView();
    }
    
    public function generateView(){
        global $conf;
        
        $smarty = new Smarty();

        $smarty->assign('conf',$conf);
        
        $smarty->assign('page_title','Kalkulator BMI');
        $smarty->assign('page_description','Obliczanie prawidlowej masy ciala');
        $smarty->assign('page_header','Kalkulator');

        $smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result);
        $smarty->assign('msgs',$this->msgs);

        $smarty->display($conf->root_path.'/app/calc/calcView.tpl');
    }
   
}

?>
