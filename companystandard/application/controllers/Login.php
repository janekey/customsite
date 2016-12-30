<?php

/**
 * User: cangfeng.zq
 * Date: 16/12/10 下午10:44
 */
class Login extends CI_Controller
{
    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = null;
        if ($username == null || $password == null) {
            $data['auth'] = 'null';
        } else if ($username == 'admin' && $password == 'admin') {
            $this->session->set_userdata('admin', '1');
            redirect('/admin');
        } else {
            $data['auth'] = 'fail';
        }

        $this->load->view('admin/login', $data);
    }

    public function logout() {
        $this->session->unset_userdata('admin');
        redirect('/login');
    }
}