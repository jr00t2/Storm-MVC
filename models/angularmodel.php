<?php
class AngularModel extends Model {
	public function Login ($email, $password) {
		$sql = "SELECT email, password FROM Users WHERE email = '$email' AND password = '$password'";
		$this->_setSql($sql);
		$user = $this->getAll();
		if (empty($user))
        {
            return false;
        }
         
        return true;
	} //end of login
	
	public function Register ($email, $password) {
		$sql = "INSERT INTO Users (email, password) VALUES ('$email', '$password')";
		$this->_setSql($sql);
		$user = $this->execute();
 
        return true;
	}
	
	
	
}