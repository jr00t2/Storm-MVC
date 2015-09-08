<?php
 
class View
{
    protected $_file;
	protected $_bootstrap;
    protected $_data = array();
     
    public function __construct($file, $_bootstrap)
    {
        $this->_file = $file;
		$this->_bootstrap = $_bootstrap;
    }
     
    public function set($key, $value)
    {
        $this->_data[$key] = $value;
    }
     
    public function get($key) 
    {
        return $this->_data[$key];
    }
     
    public function output()
    {
        if (!file_exists($this->_file))
        {
            throw new Exception("Template " . $this->_file . " doesn't exist.");
        }
         
        extract($this->_data);
        ob_start();
		include($this->_bootstrap);
        include($this->_file);
        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }
}