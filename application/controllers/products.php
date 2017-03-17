<?php
class Products extends CI_Controller {
  public function index() {
    //Get all products
    //Go into the products model and get the get_products function
    // Store the data from products model in $data as an array
    $data['products'] = $this->Product_model->get_products();
    //Load View
    $data['main_content'] = 'products';
    //send the data to the views
    $this->load->view('layouts/main', $data);
  }

  public function details($id) {
    //Get Product Details
    $data['product'] = $this->Product_model->get_product_details($id);

    //Load View
    $data['main_content'] = 'details';
    $this->load->view('layouts/main', $data);

  }
}
