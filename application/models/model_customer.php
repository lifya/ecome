<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model {
    
    public function get_shopping_history($user)
    {
        //get all invoices identified by $user
        $hasil = $this->db->select('i.*, SUM(o.qty2 * o.price2) AS total')
                          ->from('invoices2 i, users2 u, orders2 o')
                          ->where('u.username2',$user)
                          ->where('u.id2 = i.user_id2')
                          ->where('o.invoice_id2 = i.id2')
                          ->group_by('o.invoice_id2')
                          ->get();
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false; //if there are no matching records/Jika tidak ada catatan yang cocok
        }
    }
    
    public function mark_invoice_confirmed($invoice_id, $amount)
    {
        $ret = true;
        //check the invoice
        $invoice = $this->db->where('id2',$invoice_id)->limit(1)->get('invoices2');
        if($invoice->num_rows() == 0){
            $ret = $ret && false;
        } else {
            //check the amount
            $total = $this->db->select('SUM(qty2 * price2) as total')
                          ->where('invoice_id2',$invoice_id)
                          ->get('orders2');
            if($total->row()->total > $amount){
                $ret = $ret && false;
            } else {
                //mark the invoice to PAID
                $this->db
                        ->where('id2',$invoice_id)
                        ->update('invoices2',array('status2'=>'confirmed'));
            }
        }
        return $ret; //mengembalikan nilai/data/variabel "$ret"
    }
}