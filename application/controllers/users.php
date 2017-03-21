<?php

class Users extends CI_Controller {
  public function register() {

    //Validation Rules
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');

    if($this->form_validation->run()== false) {

      $data['main_content'] = 'register';
      $this->load->view('layouts/main', $data);

    } else {

      echo "Is all good";
    }
  }
}
