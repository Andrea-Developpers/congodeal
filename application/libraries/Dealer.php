<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Dealer {

    /**
     * 
     *   1. Dealer (utilisateur principal)
     *   - Pseudo *
     *   - Email  
     *   - Numéro de téléphone *
     *   - Addresse physique (Résidence actuelle)
     *   - Compte (Entreprise - Personnel - Temporaire)
     *   - Photo
     *   - Bio 
     *   - Catégorie (Vetement - Nourriture - Equipement éléctronique - Diversifié) *
     *   - Niveau de compétence (Pro - Medium - Débutant)
     *   - Mot de passe *
     *
     */

     


     /**
      * $params
      *
      * @var array
      */
    private $params = array();

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
     * get_ID()
     *
     * @return string
     */
    public function get_ID() : string 
    {
        return $this->params['ID'];
    }

    /**
     * get_password()
     *
     * @return string
     */
    public function get_password() : string 
    {
        return $this->params['password'];
    }


    /**
     * get_dealers()
     *
     * @return array
     */
    public function get_dealers() : array 
    {
        $dealers = array();
        $result = $this->UserModel->get_dealers();
        if( ! empty($result) || $result != NULL) 
        {
            $dealers = $result;
            return $dealers;
        } else 
        {
            return $dealers;
        }
    }
 

    /**
     * add_dealer(array $dealer)
     * 
     * Ajoutons un utlisateur
     *
     * @param array $dealer
     * @return boolean
     */
    public function add_dealer(array $dealer) : bool {
        
        # Pourquoi prendre leurs numéros de téléphone
        # et leurs pseudo ??
        $phones = $this->get_dealers_phones();
        $pseudos = $this->get_dealers_pseudos();

        # Et bien pour vérifier si il n'est pas déjà inscrit
        # Les rédondances c'est pas bon pour la santé
        if( ! in_array($dealer['phone'], $phones) || ! in_array($dealer['pseudo'], $pseudos))
        {
            # C'est bon, il a un compte ???
            $result = $this->UserModel->add_dealer($dealer);
            return TRUE;
        }
       else 
       {
           return FALSE;
       }
    }


    /**
     * delete_dealer(int $id_dealer)
     * 
     * Bon, supprimons l'utilisateur
     *
     * @param integer $id_dealer
     * @return boolean
     */
    public function delete_dealer(int $id_dealer) : bool
    {
        # Utilisateur où es-tu ??
        $dealer = $this->UserModel->get_user_where_id($id_dealer);
        # Si t'es là...
        if($dealer != NULL) 
        {
            # Bah... on te supprime
            $this->UserModel->delete($id_dealer);
            return TRUE;
        }
        # Si t'es pas là...
        else 
        {
            # Ca sera pour une prochaine fois. :-(
            return FALSE;
        }
    }


    /**
     * update_dealer(array $dealer_data)
     *
     * @param array $dealer_data
     * @return boolean
     */
    public function update_dealer(array $dealer_data) : bool
    {
        $dealer = $this->UserModel->get_user_where_id((int) $dealer_data['id']);
        if($dealer != NULL)
        {
            $this->UserModel->update($dealer_data);
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
    }


    /**
     * get_dealers_phones()
     *
     * @return array
     */
    private function get_dealers_phones() : array 
    {
        # Tiens, après conversion des résultats de la base de données
        # la variable $dealers est un tableau associatif contenant tous les dealers
        $dealers = $this->useful->cast_db_result_to_array($this->UserModel->get_dealers());
        
        # Et la variable $phones est un tableau associatif qui contiendra 
        # tous les numéros de téléphones des utilisateurs 
        $phones = array();

        # Bah... si les dealers ne sont pas vides :-) MDR !!!
        if(empty($dealers) != NULL) 
        {
            # On récupère leur numéro de téléphone
            foreach ($dealers as $item) {
                # Et oop, un tableau tout c'qui a de plus normal
                array_push($phones, $item->phone);
            }
        }
        else 
        {   
            # Sinon on retourne un tableau vide
            return $phones;
        }
    }

    private function get_dealers_pseudos() : array 
    {
        # Tiens, après conversion des résultats de la base de données
        # la variable $dealers est un tableau associatif contenant tous les dealers
        $dealers = $this->useful->cast_db_result_to_array($this->UserModel->get_dealers());
        
        # La variable $phones est un tableau associatif qui contiendra 
        # tous les numéros de téléphones des utilisateurs 
        $pseudos = array();

        # Bah... si les dealers ne sont pas vides :-) MDR !!!
        if(empty($dealers) != NULL) 
        {
            # On récupère leur numéro de téléphone
            foreach ($dealers as $item) {
                # Et oop, un tableau tout c'qui a de plus normal
                array_push($pseudos, $item->pseudo);
            }
        }
        else 
        {   
            # Sinon on retourne un tableau vide
            return $pseudos;
        }
    }

    /**
     * phones_and_pseudos_of_dealer(int $id_dealer)
     *  
     * Si tu ne veux pas te casser la tête avec toutes ces tralala
     * des fonction get_dealers_phones() et get_dealers_pseudos() qui
     * retournent respectivement un tableau des numéros de téléphones et des pseudos de tous les dealers
     * ...
     * tu peux toujours utiliser celle déclarée ci-dessous
     * qui retourne un tableau multidimensionnel contenant
     * à la clé 'phones' : tous les numéros de téléphones
     * et à la clé 'pseudos' : tous les pseudos des utilisateurs
     * 
     * Bon bref....
     * 
     * @param integer $id_dealer
     * @return array
     */
    public function phones_and_pseudos_of_dealer(int $id_dealer) : array
    {
        # Bah voyons, un tableau multidimensionnel ;-)
        $arr = array( 
            'phones' => array(), 
            'pseudos' => array() 
        );

        # Et tous les dealers de la base de données sous forme
        # de tableau associatif
        $dealers = $this->useful->cast_db_result_to_array($this->UserModel->get_dealers());

        if($dealers != NULL)
        {   
            foreach ($dealers as $item) {
                $arr['phones'] = $item->phone;
                $arr['pseudos'] = $item->pseudos;
            }
            return $arr;
        }
        else
        {
            # Vide...
            return $arr;
        }
    }

    /**
     * get_dealer_infos(int $id_user)
     * 
     * Retourne toutes les informations sur un dealer notament :
     * 1. Ses informations personnelles,
     * 2. Ses deals...
     *
     * @param integer $id_user
     * @return array
     */
    public function get_dealer_infos(int $id_user) : array
    {
        $dealer_infos = array(
            'dealer' => array(),
            'deals' => array()
        );

        $dealer = $this->UserModel->get_user_where_id($id_user);
        
        # Si l'utilisateur est trouvé dans la base de données
        if($dealer != NULL || ! empty($dealer))
        {
            # On retourne un tableau associatif comprenant
            # l'utilisateur et ses infos 
            return $dealer;
        }
        else 
        {
            return array();
        }
    }

    /**
     * pick_dealer(string $email_dealer, array $arr)
     *
     * @param string $email_dealer
     * @param array $arr
     * @return array
     */
    public function pick_dealer(string $email_dealer, array $arr) : array
    {
        
    }
}
