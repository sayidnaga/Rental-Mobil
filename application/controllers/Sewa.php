<?php
class Sewa extends CI_Controller
{
    function index()
    {   
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('SewaModel','sewa');
            $data['sewa_data'] = $this->sewa->getAll();

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('sewa/index',$data);
            $this->load->view('components/script');
        } else {
            redirect(base_url()."index.php/auth/login");
        }
    }

    function create()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('sewa/create');
            $this->load->view('components/script');
        }
    }

    function edit()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $id = $this->input->get('id');
            $this->load->model('SewaModel','sewa');
            $data['sewa_data'] = $this->sewa->findById($id);

            $this->load->view('components/header');
            $this->load->view('components/navbar');
            $this->load->view('components/sidebar');
            $this->load->view('sewa/edit',$data);
            $this->load->view('components/script');
        }
    }

    function update()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('SewaModel','sewa');

            $idedit = $this->input->post('id');
            $nama = $this->input->post('nama');
            $produk = $this->input->post('produk');
    
            $data[] = $nama;
            $data[] = $produk;
            $data[] = $idedit;
    
            $this->sewa->update($data);
            redirect(base_url()."index.php/sewa");
        }
    }

    function store()
    {
        $isAuth = $this->session->has_userdata('USERNAME');

        if($isAuth) {
            $this->load->model('SewaModel','sewa');

            $nama = $this->input->post('nama');
            $produk = $this->input->post('produk');
    
            $data[] = $nama;
            $data[] = $produk;
    
            $this->sewa->store($data);
            redirect(base_url()."index.php/sewa");
        }
    }

    function delete()
    {
        $id = $this->input->get('id');
        $this->load->model('SewaModel','sewa');
        $this->sewa->delete($id);
        redirect(base_url()."index.php/sewa");
    }
}