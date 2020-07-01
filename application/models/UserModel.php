<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @package	CodeIgniter
 * @author	Joel Elunda
 * @copyright	Copyright (c) 2020 - 2020, Andrea Medias Tech, Inc. (https://andreamediastech.com/)
 * @copyright	Copyright (c) 2020 - 2020, Joel E. (https://about-me.com/joel-elunda/)
 * @since	Version 1.0.0
 * 
 * @see CI_DB_mysqli_result Object
 */
class UserModel extends CI_Model {

    /**
     *  Avec la fonction cast_object_result_to_array(CI_DB_mysqli_result Object) : array
     *  
     * 
     *  Les résultats sont retournés sous forme d'un tableau
     *   $users = array(
     *      'user_1' => array(
     *      'id' => ,
     *      'pseudo' => '', 
     *      'email' => '', 
     *      'phone' => '', 
     *      'address' => '', 
     *      'type_compte' => '', 
     *      'imageUrl' => '', 
     *      'bio' => '', 
     *      'category' => '', 
     *      'password' => '', 
     *      ), 
     *   );
     */



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

    /**
     * $table_users
     *
     * @var string
     */
    private $table_users = 'users';



    /**
     * get_all_users()
     *
     * Comme son nom l'indique, elle retourne
     * toutes les données de la table utilisateur,
     * en l'occurence ici : les dealers
     * 
     * @return array
     */
    public function get_all_users() : array
    {
        /** La variable users contient les données 
         * de type CI_DB_mysqli_result Object.
         * 
         * @see CI_DB_mysqli_result Object
         * 
         */
        $users = $this->db->get($this->table_users)->result();

        # Puis devient un tableau associatif des plusieurs utilisateurs
        return $this->useful->cast_object_result_to_array($users);
    }

    /**
     * get_user_by_id($id_user)
     *
     * @param integer $id_user
     * @return array
     */
    public function get_user_by_id(int $id_user) : array
    {
        $user = $this->db->where('id', $id_user)->get($this->table_users)->result();
        return $this->useful->cast_object_result_to_array($user);
    }

    /**
     * get_user_by_email(int $email_user)
     *
     * @param integer $email_user
     * @return array
     */
    public function get_user_by_email(int $email_user) : array
    {
        $user = $this->db->where('email', $email_user)->get($this->table_users)->result();
        return $this->useful->cast_object_result_to_array($user);
    }

    /**
     * add_user(array $user)
     *
     * @param array $user
     * @return boolean
     */
    public function add_user(array $user) : bool
    {
        
        if($this->useful->already_exist())
    }



}