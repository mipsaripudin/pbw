<?php

class Reset_password extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Reset Password";
        $this->load->view('layout/user/header', $data);
        $this->load->view('user/reset/index', $data);
        $this->load->view('layout/user/footer');
    }

    public function proses()
    {
        $new_password     = $this->input->post('new_password');
        $confirm_password     = $this->input->post('confirm_password');

        $this->form_validation->set_rules('new_password', 'Password Baru', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Ulangi Password', 'required');

        if ($this->form_validation->run() != False) {
            $data = array('password' => md5($new_password));
            $id = array('id_pegawai' => $this->session->userdata('id_pegawai'));
            $this->Model->update('pegawai', $data, $id);
            redirect('auth');
        } else {
            $data['title'] = "Ubah Password";
            $_SESSION["invalid"] = 'Password yang anda masukkan tidak sama.';
            $this->load->view('layout/user/header', $data);
            $this->load->view('user/reset/index', $data);
            $this->load->view('layout/user/footer');
        }
    }
}
