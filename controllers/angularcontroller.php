<?php
 
class AngularController extends Controller
{
    public function __construct($model, $action)
    {
        parent::__construct($model, $action);
        $this->_setModel($model);
    }
     
    public function index()
    {
        try {
             
            $this->_view->set('title', 'Angularjs Example');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }
	
	public function login() {
		 try {
            $postdata = file_get_contents("php://input");
			$request = json_decode($postdata);
			@$email = $request->email;
			@$password = $request->password;
			@$password = md5($password); 
            $authentication = $this->_model->Login($email, $password);
            $this->_view->set('authentication', $authentication);
            $this->_view->set('title', 'Angularjs Example Login');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
	}
    
	public function register() {
		 try {
			$postdata = file_get_contents("php://input");
			$request = json_decode($postdata);
			@$email = $request->email;
			@$password = $request->password;
			@$password = md5($password);
            $registration = $this->_model->Register($email, $password);
            $this->_view->set('registration', $registration);
            $this->_view->set('title', 'Angularjs Example Login');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
	}
    
    // End
}