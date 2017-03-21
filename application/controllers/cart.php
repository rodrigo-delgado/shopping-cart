<?php

class Cart extends CI_Controller {
  public $paypal_data = '';
  public $tax;
  public $shipping;
  public $total = 0;
  public $grand_total;

  /*
   * Cart Index
   */
  public function index() {
    //Load view
    $data['main_content'] = 'details';
    $this->load->view('layouts/main', $data);
  }

  /*
   * Add to Cart
   */
  public function add() {
    // Item Data
   $data = array (
             'id' => $this->input->post('item_number'),
             'qty' =>$this->input->post('qty'),
             'price' =>$this->input->post('price'),
             'name' =>$this->input->post('title')
    );
    // print_r($data); die();
    //Insert Into Cart
    $this->cart->insert($data);

    redirect('products');
  }
}
