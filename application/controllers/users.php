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
        if($this->User_model->register()) {
          $this->session->set_flashdata('registered', 'You are now registered and can login');
          redirect('products');
        }
    }
  }

  public function login() {
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $user_id = $this->User_model->login($username, $password);

    //Validate User
    if($user_id) {
      //Create an array of user data
      $data = array(
              'user_id'   => $user_id,
              'username'  => $username,
              'logged in' => true
      );
      //Set session userdata
      $this->session->set_userdata($data);

      //Set Message
      $this->session->set_flashdata('pass_login', 'Yup you are logged in');
      redirect('products');

    } else {

      //Set Error
      $this->session-set_flashdata('fail_login', 'nope, you need to login');
      redirect('products');
    }
  }
}
