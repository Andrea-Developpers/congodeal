<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Useful {

    /**
     * __construct($params)
     *
     * @param array $params
     */
    public function __construct($params) 
    {
        $this->CI =& get_instance();
        $this->params = $params;
    }

    /**
     * cast_object_result_to_array($db_result)
     * 
     * Une fonction qui permet de convertir les variables de type Object
     * en un tableau
     *
     * @param CI_DB_mysqli_result Object $db_result
     * @return array
     */
    public function cast_object_result_to_array($db_data) : array 
    {
        # Un tableau vide qui va stocker les résultats
        $arr = array();
        
        # Si la variable passé en paramètre est bien du type object
        if(is_object($db_data))
        {
            # On récupère son contenu
            # Puis on boucle jusqu'à associé 
            # toutes les clés à leur valeur respective 
            $data_result = $db_data->result();
            foreach ($data_result as $key => $value) {
                $arr[$key] = $value;
                # On pouvait aussi faire array_push($arr, $value);
                # les clés auraient des indices allant de 0 à count($data_result) - 1
            }
            return $arr;
        }
        else 
        {
            return $arr;
        }
        
    }


    /**
     * already_exist($value, array $arr)
     *
     * @param [type] $value
     * @param [type] $arr
     * @return boolean
     */
    public function already_exist($value, $arr) : bool
    {
        $arr_items = array();
        if( ! is_object($arr))
        {
            $arr_items = $this->cast_object_result_to_array($arr);
        }
        
        if(in_array($value, $arr_items))
        {
            return TRUE;
        } 
        else 
        {
            return FALSE;
        }

    }
 

}