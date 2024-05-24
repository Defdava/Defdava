<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('contract');
        $this->load->view('templates/footer');
    }

    public function process()
    {
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $message = $this->input->post("message");

        $data = [
            "name" => $name,
            "email" => $email,
            "message" => $message
        ];

        $this->db->insert("collaborator", $data);

        redirect(base_url("/home"));
    }
}
