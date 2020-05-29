<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_cms extends CI_Model

{



    function login_cms($username, $password)

    {

        $this->db->select('*');
        $this->db->where('id', $username);
        $this->db->where('pass', $password);
        $this->db->from('s_user');

        $query = $this->db->get();

        return $query;
    }



    function checkUsername($username)

    {

        $this->db->select('*');
        $this->db->from('s_user');
        $this->db->where('id', $username);

        $query = $this->db->get();

        return $query;
    }



    //-------------------------------------------------------------------------------------------------------------------  MEMBER

    function select_member()

    {
        $this->db->select('*');
        $this->db->from('g_member');
        $query = $this->db->get();

        return $query;
    }



    function delete_member($id, $email)
    {
        $this->db->where('ID', $id);

        $this->db->delete($email);
    }



    function singleMember($id)

    {



        $this->db->select('*');

        $this->db->from('g_member');

        $this->db->where('ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function updateMember($id, $fname, $lname, $phone, $add1, $country, $province)

    {



        $data = array(



            'FIRST_NAME'  => $fname,

            'LAST_NAME'  => $lname,

            'PHONE' => $phone,

            'ADDRESS' => $add1,

            'COUNTRY' => $country,

            'PROVINCE' => $province

        );



        $this->db->where('ID', $id);

        $this->db->update('g_member', $data);
    }



    //-------------------------------------------------------------------------------------------------------------------  ORDER

    function select_order()

    {

        $this->db->select('*');

        $this->db->from('v_g_order_master');



        $query = $this->db->get();



        return $query;
    }



    function select_order_date($start_date, $end_date)

    {

        $this->db->select('*');

        $this->db->from('v_g_order_master');

        $this->db->where('ORDER_DATE >=', $start_date);

        $this->db->where('ORDER_DATE <=', $end_date);

        // $this->db->where("ORDER_DATE BETWEEN".$start_date."AND".$end_date."");

        // $this->db->where("$accommodation BETWEEN $minvalue AND $maxvalue");



        $query = $this->db->get();



        return $query;
    }



    function getOrderMasterDataFromQuery($query)

    {



        $this->db->select('*');

        $this->db->from('v_g_order_master');

        $this->db->where('ORDER_STATUS', $query);

        $this->db->order_by('ORDER_DATE', 'DESC');



        $query = $this->db->get();



        return $query;
    }



    function singleOrder($orderNo)

    {



        $this->db->select('*');

        $this->db->from('v_g_order_master');

        $this->db->where('ORDER_ID', $orderNo);



        $query = $this->db->get();



        return $query;
    }



    function singleLog($orderNo)

    {



        $this->db->select('*');

        $this->db->from('g_log');

        $this->db->where('ORDER_NO', $orderNo);

        $this->db->order_by('TRANS_DATE', 'desc');



        $query = $this->db->get();



        return $query;
    }



    function singleOrderForm($orderNo, $prodId)

    {



        $this->db->select('*');

        $this->db->from('v_g_order_detail');

        $this->db->where('ORDER_ID', $orderNo);

        $this->db->where('PROD_ID', $prodId);



        $query = $this->db->get();



        return $query;
    }



    function updateOrderStatus($orderNo, $status, $notes, $warranty, $updated)

    {



        $data = array(



            'ORDER_STATUS'  => $status,

            'UPDATED' => $updated,

            'NOTES' => $notes,

            'WARRANTY' => $warranty

        );



        $this->db->where('ORDER_ID', $orderNo);

        $this->db->update('g_order_master', $data);
    }



    function updateOrderLog($orderNo, $user, $current_status, $status, $updated)

    {



        $data = array(

            'ORDER_NO'      => $orderNo,

            'USER'          => $user,

            'CURRENT_STATUS' => $current_status,

            'STATUS'      => $status,

            'TRANS_DATE'    => $updated

        );



        // $this->db->where('ORDER_ID', $orderNo);

        $this->db->insert('g_log', $data);
    }



    // function updateDetailStatus($detailNo, $detail_status){



    //     $data = array(



    //         'DETAIL_STATUS'  => 'Sent to Lab'

    //     );



    //     $this->db->where('ORDER_NO', $detailNo);

    //     $this->db->update('g_order_detail', $data);

    // }



    function updateStatusDetail($detailNo, $detailProd, $detail_status)

    {



        $data = array(



            'DETAIL_STATUS'  => $detail_status

        );



        $this->db->where('ORDER_NO', $detailNo);

        $this->db->where('PROD_ID', $detailProd);

        $this->db->update('g_order_detail', $data);
    }



    function delete_order_master($orderNo, $email)

    {



        $this->db->where('ORDER_ID', $orderNo);

        $this->db->delete($email);
    }



    function delete_order_detail($orderNo, $email)

    {



        $this->db->where('ORDER_NO', $orderNo);

        $this->db->delete($email);
    }



    //------------------------------------------------------------------------------------------------------------------- HOME TRIAL

    function select_trial()

    {

        $this->db->select('*');

        $this->db->from('v_g_trial_master');

        // $this->db->order_by('ORDER_DATE', 'DESC');



        $query = $this->db->get();



        return $query;
    }



    function singleTrial($orderNo)

    {



        $this->db->select('*');

        $this->db->from('v_g_trial_master');

        $this->db->where('TRIAL_ID', $orderNo);



        $query = $this->db->get();



        return $query;
    }



    function updateTrialStatus($orderNo, $status, $notes, $updated)

    {



        $data = array(



            'TRIAL_STATUS'  => $status,

            'UPDATED' => $updated,

            'NOTES' => $notes

        );



        $this->db->where('TRIAL_ID', $orderNo);

        $this->db->update('g_trial_master', $data);
    }



    function getTrialMasterDataFromQuery($query)

    {



        $this->db->select('*');

        $this->db->from('v_g_trial_master');

        $this->db->where('TRIAL_STATUS', $query);

        // $this->db->order_by('ORDER_DATE', 'DESC');



        $query = $this->db->get();



        return $query;
    }





    //------------------------------------------------------------------------------------------------------------------- PRODUCT

    function select_product()

    {

        $this->db->select('*');

        $this->db->from('v_g_product');

        $this->db->where('DEFAULT_IMAGE', 1);

        $this->db->order_by('PROD_ID', 'ASC');

        $this->db->group_by('NAME');



        $query = $this->db->get();



        return $query;
    }



    function select_color($id)

    {

        $this->db->select('*');

        $this->db->from('m_color');

        $this->db->where('ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function select_allcolor()

    {

        $this->db->select('*');

        $this->db->from('m_color');

        // $this->db->where('ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function singleProduct($id)

    {



        $this->db->select('*');

        $this->db->from('v_g_product');

        $this->db->where('PROD_ID', $id);

        $this->db->group_by('PROD_ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function getImages($id)

    {



        $this->db->select('*');

        $this->db->from('v_g_product');

        $this->db->where('PROD_ID', $id);

        $this->db->order_by('ID');



        $query = $this->db->get();



        return $query;
    }



    function select_product_color($prod_id)

    {



        return $this->db->query("SELECT * FROM v_g_product

                WHERE PROD_ID='$prod_id'

                ");
    }



    function insert_product($data, $data2, $data3)

    {

        $insert = $this->db->insert('g_product', $data);

        $insert = $this->db->insert('g_product_image', $data2);

        $insert = $this->db->insert('m_color', $data3);

        return $insert;
    }



    function delete_product($prodID, $name)

    {



        $this->db->where('PROD_ID', $prodID);

        $this->db->delete($name);
    }





    function update_product($prodID, $name, $categoryID, $price, $status, $desc, $size)

    {

        $data = array(

            'NAME'  => $name,

            'CATEGORY'  => $categoryID,

            'PRICE'  => $price,

            'AVAILABILITY'  => $status,

            'SIZE'  => $size,

            'DESCRIPTION'  => $desc

        );



        $this->db->where('PROD_ID', $prodID);

        $this->db->update('g_product', $data);
    }



    function insert_image($prodID, $image, $color, $category)

    {



        $data = array(

            'PROD_ID' => $prodID,

            'IMAGE' => $image,

            'DEFAULT_IMAGE' => 0,

            'COLOR_ID' => $color,

            'CATEGORY' => $category,

            'ORDER_NO' => 1

        );



        $this->db->insert('g_product_image', $data);
    }



    function insert_image_pick($prodID, $image, $colorpick, $category)

    {



        $data = array(

            'PROD_ID' => $prodID,

            'IMAGE' => $image,

            'DEFAULT_IMAGE' => 0,

            'COLOR_ID' => $colorpick,

            'CATEGORY' => $category,

            'ORDER_NO' => 1

        );



        $this->db->insert('g_product_image', $data);
    }



    function insert_color($id, $hex)

    {

        $data = array(

            'ID' => $id,

            'HEXADECIMAL' => $hex,

            'DESCRIPTION' => '',

            'ORDER_NO' => ''

        );



        $this->db->insert('m_color', $data);
    }



    function delete_image($prodID, $image, $color)

    {



        $this->db->where('PROD_ID', $prodID);

        $this->db->where('IMAGE', $image);

        $this->db->where('COLOR_ID', $color);

        $this->db->delete('g_product_image');
    }



    function delete_color($id, $hex)

    {



        $this->db->where('ID', $id);

        $this->db->where('HEXADECIMAL', $hex);

        $this->db->delete('m_color');
    }



    function default_image($prodID)

    {

        $data = array(

            'DEFAULT_IMAGE'  => 0

        );



        $this->db->where('PROD_ID', $prodID);

        $this->db->where('DEFAULT_IMAGE', 1);

        $this->db->update('g_product_image', $data);
    }



    function replace_image($prodID, $image)

    {



        $data = array(

            'DEFAULT_IMAGE'  => 1

        );



        $this->db->where('PROD_ID', $prodID);

        $this->db->where('IMAGE', $image);

        $this->db->update('g_product_image', $data);
    }



    //------------------------------------------------------------------------------------------------------------------- BANNER

    function select_banner()

    {

        $this->db->select('*');

        $this->db->from('g_banner');



        $query = $this->db->get();



        return $query;
    }



    //------------------------------------------------------------------------------------------------------------------- TERMS

    function select_terms()

    {

        $this->db->select('*');

        $this->db->from('g_measurements');



        $query = $this->db->get();



        return $query;
    }



    function singleTerms($id)

    {



        $this->db->select('*');

        $this->db->from('g_measurements');

        $this->db->where('DOCUMENT_ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function updateTerms($id, $defaultPath)

    {



        $data = array(

            'PATH'  => $defaultPath

        );



        $this->db->where('DOCUMENT_ID', $id);

        $this->db->update('g_measurements', $data);
    }

    //------------------------------------------------------------------------------------------------------------------- MAINTAIN PRODUCT

    // function select_maintain_stock()

    // {

    //     $this->db->select('*');

    //     $this->db->from('g_maintain_stock');



    //     $query = $this->db->get();



    //     return $query;

    // }



    function select_maintain_stock()
    {

        $sql = $this->db->query("SELECT * FROM g_maintain_stock INNER JOIN v_g_product ON g_maintain_stock.PROD_ID=v_g_product.PROD_ID where DEFAULT_IMAGE ='1' order by g_maintain_stock.PROD_ID desc");

        return $sql;
    }



    public function select_item_color_stock()

    {

        $this->db->select('*');

        $this->db->from('v_g_product');



        $query = $this->db->get();



        return $query;
    }



    public function select_nama_produk($id)
    {

        $this->db->select('*');

        $this->db->from('v_g_product');

        $this->db->where('PROD_ID', $id);



        $query = $this->db->get();



        return $query;
    }





    function insert_product_stock($data)

    {

        $insert = $this->db->insert('g_maintain_stock', $data);

        return $insert;
    }



    function singleStock($id)

    {



        $this->db->select('*');

        $this->db->from('v_g_product');

        $this->db->where('PROD_ID', $id);

        $this->db->group_by('PROD_ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function singleProduk($id)

    {



        $this->db->select('*');

        $this->db->from('g_maintain_stock');

        $this->db->where('REC_ID', $id);



        $query = $this->db->get();



        return $query;
    }



    function updateStockProduct($id, $product_id, $color_code, $stock, $name)

    {

        $data = array(

            'PRODUCT_ID' => $product_id,

            'COLOR_CODE' => $color_code,

            'STOCK' => $stock,

            'NAME' => $name

        );

        $this->db->where('REC_ID', $id);

        $this->db->update('g_maintain_stock', $data);
    }



    public function deleteStock($id)
    {

        $this->db->where('REC_ID', $id);

        $delete = $this->db->delete('g_maintain_stock');



        return $delete;
    }



    public function select_colorr()
    {

        $this->db->select('*');

        $this->db->from('m_color');



        $query = $this->db->get();



        return $query;

        // $this->db->where('PROD_ID', $id);



    }



    function getColorMaintainStockFromQuery($query)

    {

        // $query = $this->db->query("SELECT * FROM g_maintain_stock INNER JOIN v_g_product ON g_maintain_stock.PROD_ID=v_g_product.PROD_ID where COLOR_ID ='$query' order by g_maintain_stock.PROD_ID desc");

        // return $query;



        $this->db->select('*');

        $this->db->from('g_maintain_stock');

        $this->db->join('v_g_product', 'g_maintain_stock.PROD_ID = v_g_product.PROD_ID', 'INNER');

        $this->db->where('g_maintain_stock.COLOR', $query);

        // $this->db->where('COLOR', $query);

        // $this->db->where('DEFAULT_IMAGE',1);

        // $this->db->order_by('ORDER_DATE', 'DESC');



        $query = $this->db->get();



        return $query;
    }



    public function select_choose_color($color)

    {

        // return $this->db->query("SELECT * FROM G_WEIGHING_INBOUND WHERE (TRANS_DATE>='" . $date1 . "' and TRANS_DATE<='" . $date2 . "') and MITRA_ID like '%" . $name . "%'");

        return $this->db->query("SELECT * FROM g_maintain_stock");
    }



    public function select_footer()
    {

        $this->db->select('*');

        $this->db->from('g_footer');



        $query = $this->db->get();



        return $query;
    }

    public function select_footer_faq()
    {
        $this->db->select('*');
        $this->db->from('g_footer');
        $this->db->where('DOCUMENT_ID', 'FAQ');

        $query = $this->db->get();

        return $query;
    }

    public function select_footer_about()
    {
        $this->db->select('*');
        $this->db->from('g_footer');
        $this->db->where('DOCUMENT_ID', 'ABOUT');

        $query = $this->db->get();

        return $query;
    }

    public function select_footer_privacy()
    {
        $this->db->select('*');
        $this->db->from('g_footer');
        $this->db->where('DOCUMENT_ID', 'PRIVACY');

        $query = $this->db->get();

        return $query;
    }

    public function select_footer_terms()
    {
        $this->db->select('*');
        $this->db->from('g_footer');
        $this->db->where('DOCUMENT_ID', 'TERMS');

        $query = $this->db->get();

        return $query;
    }

    public function select_edit_footer($id)
    {

        $this->db->select('*');

        $this->db->from('g_footer');

        $this->db->where('REC_ID', $id);

        $query = $this->db->get();



        return $query;
    }



    public function editFooter_cms($id, $data)
    {



        $this->db->where('REC_ID', $id);

        $update = $this->db->update('g_footer', $data);



        return $update;
    }

    public function insert_contact($data)
    {
        $insert = $this->db->insert('g_contactus', $data);

        return $insert;
    }
}
