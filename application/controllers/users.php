<?php

class Users extends CI_Controller {
  public function register() {
    $data['main_content'] = 'register';
    $this->load->view('layouts/main', $data);
  }
}
