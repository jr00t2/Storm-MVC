<?php
class ZertifikatController extends Controller
{
    public function __construct($model, $action)
    {
        parent::__construct($model, $action);
        $this->_setModel($model);
    }
     
    public function index()
    {
        try {
             
            $teilnehmer = $this->_model->getTeilnehmer();
            $this->_view->set('teilnehmer', $teilnehmer);
            $this->_view->set('title', 'All Participants from the database');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }
	
	public function filtered () {
		try {
			$date = isset($_POST['date']) ? trim($_POST['date']) : NULL;
			$check = true;
			$errors = array();
			if(empty($date)) {
				$check = false;
				array_push($errors, "Sie haben leider kein Datum eingegeben!");
			}
             
            $teilnehmer = $this->_model->getTeilnehmerByDate($date);
            $this->_view->set('teilnehmer', $teilnehmer);
            $this->_view->set('title', 'All Participants from the database');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
	}
}