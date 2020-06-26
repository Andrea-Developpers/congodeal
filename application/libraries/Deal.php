<?php 


class Deal {

    public function __construct($params)
    {
        $this->CI =& get_instance();
        $this->params = $params;
    }


    /**
     * get_dealer_deals(int $id_dealer)
     * 
     * Récupère par ordre chronologique tous les deals 
     * d'un dealer 
     *
     * @param integer $id_dealer
     * @return array
     */
    public function get_dealer_deals(int $id_dealer) : array
    {
        $deals = $this->DealModel->get_deals_where_user_id($id_dealer);
        if( ! empty($deals) || $deals != NULL)
        {
            $deals_arr = $this->useful->cast_db_result_to_array($deals);
            return $deals_arr;
        }
        else
        {
            return array();
        }
    }


    /**
     * get_dealer_deal(int $id_dealer)
     *
     * @param integer $id_dealer
     * @return array
     */
    public function get_dealer_deal(int $id_dealer, int $id_deal) : array
    {
        $deal = $this->DealModel->get_deal_where_dealer($id_dealer, $id_deal);
        if($deal != NULL)
        {
            $deal_arr = $this->useful->cast_db_result_to_array($deal);
            return $deal_arr;
        }
        else 
        {
            return array();
        }
    }


}

?>