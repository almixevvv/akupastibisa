<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Incube
{
    protected $CI;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI = &get_instance();
    }

    public function getSecureKey()
    {
        if (isset($_GET['key'])) {
            return false;
        } else {
            return true;
        }
    }

    public function getGeneralCart()
    {
        $this->CI->load->library('cart');

        $dtCount = 0;

        foreach ($this->CI->cart->contents() as $items) {
            if ($this->CI->cart->has_options($items['rowid']) != TRUE) {
                $dtCount++;
            }
        }

        return $dtCount;
    }
}
