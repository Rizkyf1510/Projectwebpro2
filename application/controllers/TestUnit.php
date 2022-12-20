<?php

use function PHPSTORM_META\expectedArguments;

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika user ada
        if ($user) {
            //jika user aktif

            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert
                    alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">This email has not been activited!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function Teslogin()
    {
        $test = $this->_login();
        $expected_result = 100;
        $test_name = 'menghitung';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}