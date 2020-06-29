<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class UserModel extends CI_Model {


    /**
     * $params
     *
     * @var array
     */
    private $params = array();

    public function __construct($params)
    {
        $this->CI =& get_instance();
        $this->params = $params;
    }

}