<?php

class Auth extends CI_Controller
{
    function login()
    {
        if ($this->session->has_userdata('USERNAME')) {
            redirect(base_url() . "index.php/dashboard");
        }
        $this->load->view('auth/login');
    }

    function prosesLogin()
    {
        $this->load->model('AuthModel', 'login');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $row = $this->login->authentication($username, $password);
        if (isset($row)) {
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);
            redirect(base_url() . "index.php/dashboard");
        }
        redirect(base_url() . "index.php");
    }

    function Admin()
    {
        parent::Controller();

        if ($this->some->isadmin() == '0') {
            redirect('02/index.html');
        }
    }

    function register()
    {
        if ($this->session->has_userdata('USERNAME')) {
            redirect(base_url() . "index.php/dashboard");
        }
        $this->load->view('auth/register');
    }

    function prosesRegister()
    {
        $this->load->model('AuthModel', 'register');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');

        $data[] = $username;
        $data[] = $password;
        $data[] = $email;
        $data[] = date('Y-m-d H:i:s');
        $data[] = NULL;
        $data[] = 1;
        $data[] = $role;

        $this->register->store($data);
        redirect(base_url() . "index.php/auth/login");
    }

    function logout()
    {
        $this->session->set_userdata('USERNAME');
        $this->session->set_userdata('ROLE');
        $this->session->set_userdata('USER');
        redirect(base_url() . "index.php/auth/login");
    }
}
