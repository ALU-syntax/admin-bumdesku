<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends CI_Controller
{

    public function  __construct()
    {
        parent::__construct();
       
        if ($this->session->userdata('user_name') == NULL && $this->session->userdata('password') == NULL) {
            redirect(base_url() . "login");
        }
        if($this->session->userdata('role') != 1)
        {
            redirect(base_url() . "dashboard");
        }
        // $this->load->library('form_validation');
        $this->load->model('wallet_model', 'wallet');
        $this->load->model('users_model', 'user');
    }
    public function CekSuper()
    {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM admin where id = $id ";
        $query = $this->db->query($sql)->result();
        $SuperAdmin = $query[0]->admin_role;
        // var_dump($SuperAdmin==0);die;
        if ($SuperAdmin == 0) {

            echo "<script>
                    alert('Anda Tidak Punya Akses!');
                    window.location.href='dashboard';
                    </script>";
            // redirect('dashboard');
            // exit();
        }

    }
    public function index()
    {
        $this->CekSuper();
        $getview['view'] = 'walletdata';

        $data['jumlahdiskon'] = $this->wallet->getjumlahdiskon();
        $data['orderplus'] = $this->wallet->gettotalorderplus();
        $data['ordermin'] = $this->wallet->gettotalordermin();
        $data['withdraw'] = $this->wallet->gettotalwithdraw();
        $data['topup'] = $this->wallet->gettotaltopup();
        $data['saldo'] = $this->wallet->getallsaldo();
        $data['currency'] = $this->user->getcurrency();
        $data['wallet'] = $this->wallet->getwallet();

        $this->load->view('includes/header');
        $this->load->view('wallet/index', $data);
        $this->load->view('includes/footer', $getview);
    }

    public function wconfirm($id, $id_user, $amount)
    {
        $this->CekSuper();

        $token = $this->wallet->gettoken($id_user);
        $regid = $this->wallet->getregid($id_user);
        $tokenmerchant = $this->wallet->gettokenmerchant($id_user);

        if ($token == NULL and $tokenmerchant == NULL and $regid != NULL) {
            $topic = $regid['reg_id'];
        } else if ($regid == NULL and $tokenmerchant == NULL and $token != NULL) {
            $topic = $token['token'];
        } else if ($regid == NULL and $token == NULL and $tokenmerchant != NULL) {
            $topic = $tokenmerchant['token_merchant'];
        }

        $title = 'Sukses';
        $message = 'Permintaan berhasil dikirim';
        $saldo = $this->wallet->getsaldo($id_user);



        $this->wallet->ubahsaldo($id_user, $amount, $saldo);
        $this->wallet->ubahstatuswithdrawbyid($id);
        $this->wallet->send_notif($title, $message, $topic);
        $this->session->set_flashdata('ubah', 'Permintaan berhasil dikirim');
        redirect('wallet/index');
    }

    public function wcancel($id, $id_user)
    {
        $this->CekSuper();

        $token = $this->wallet->gettoken($id_user);
        $regid = $this->wallet->getregid($id_user);
        $tokenmerchant = $this->wallet->gettokenmerchant($id_user);

        if ($token == NULL and $tokenmerchant == NULL and $regid != NULL) {
            $topic = $regid['reg_id'];
        } else if ($regid == NULL and $tokenmerchant == NULL and $token != NULL) {
            $topic = $token['token'];
        } else if ($regid == NULL and $token == NULL and $tokenmerchant != NULL) {
            $topic = $tokenmerchant['token_merchant'];
        }

        $title = 'Permintaan dibatalkan';
        $message = 'Mohon maaf permintaan dibatalkan';

        $this->wallet->cancelstatuswithdrawbyid($id);
        $this->wallet->send_notif($title, $message, $topic);
        $this->session->set_flashdata('ubah', 'Permintaan dibatalkan');
        redirect('wallet/index');
    }

    public function tconfirm($id, $id_user, $amount)
    {
        $this->CekSuper();

        $token = $this->wallet->gettoken($id_user);
        $regid = $this->wallet->getregid($id_user);
        $tokenmerchant = $this->wallet->gettokenmerchant($id_user);

        if ($token == NULL and $tokenmerchant == NULL and $regid != NULL) {
            $topic = $regid['reg_id'];
        } else if ($regid == NULL and $tokenmerchant == NULL and $token != NULL) {
            $topic = $token['token'];
        } else if ($regid == NULL and $token == NULL and $tokenmerchant != NULL) {
            $topic = $tokenmerchant['token_merchant'];
        }

        $title = 'Topup berhasil';
        $message = 'Permintaan topup berhasil';
        $saldo = $this->wallet->getsaldo($id_user);



        $this->wallet->ubahsaldotopup($id_user, $amount, $saldo);
        $this->wallet->ubahstatuswithdrawbyid($id);
        $this->wallet->send_notif($title, $message, $topic);
        $this->session->set_flashdata('ubah', 'Permintaan topup berhasil');
        redirect('wallet/index');
    }

    public function tcancel($id, $id_user)
    {
        $this->CekSuper();

        $token = $this->wallet->gettoken($id_user);
        $regid = $this->wallet->getregid($id_user);
        $tokenmerchant = $this->wallet->gettokenmerchant($id_user);

        if ($token == NULL and $regid != NULL) {
            $topic = $regid['reg_id'];
        }

        if ($regid == NULL and $token != NULL) {
            $topic = $token['token'];
        }

        if ($regid == NULL and $token == NULL and $tokenmerchant != NULL) {
            $topic = $tokenmerchant['token_merchant'];
        }

        $title = 'Topup dibatalkan';
        $message = 'Maaf, topup dibatalkan';

        $this->wallet->cancelstatuswithdrawbyid($id);
        $this->wallet->send_notif($title, $message, $topic);
        $this->session->set_flashdata('ubah', 'topup dibatalkan');
        redirect('wallet/index');
    }

    public function tambahtopup()
    {
        $this->CekSuper();
        $getview['view'] = 'addtopup';
        $data['currency'] = $this->user->getcurrency();
        $data['saldo'] = $this->wallet->getallsaldouser();


        if ($_POST != NULL) {


            if ($this->input->post('type_user') == 'pelanggan') {
                $id_user = $this->input->post('id_pelanggan');
            } elseif ($this->input->post('type_user') == 'mitra') {
                $id_user = $this->input->post('id_mitra');
            } else {
                $id_user = $this->input->post('id_driver');
            }

            $saldo = html_escape($this->input->post('saldo', TRUE));
            $remove = array(".", ",");
            $add = array("", "");

            $data = [
                'id_user'                       => $id_user,
                'saldo'                         => str_replace($remove, $add, $saldo),
                'type_user'                     => $this->input->post('type_user')
            ];


            $this->wallet->updatesaldowallet($data);
            $this->session->set_flashdata('ubah', 'Top Up Has Been Added');
            redirect('wallet');
        } else {
            $this->load->view('includes/header');
            $this->load->view('wallet/tambahtopup', $data);
            $this->load->view('includes/footer', $getview);
        }
    }

    public function tambahwithdraw()
    {
        $this->CekSuper();
        $getview['view'] = 'addtopup';
        $data['currency'] = $this->user->getcurrency();
        $data['saldo'] = $this->wallet->getallsaldouser();

        if ($_POST != NULL) {


            if ($this->input->post('type_user') == 'pelanggan') {
                $id_user = $this->input->post('id_pelanggan');
            } elseif ($this->input->post('type_user') == 'mitra') {
                $id_user = $this->input->post('id_mitra');
            } else {
                $id_user = $this->input->post('id_driver');
            }


            $saldo = html_escape($this->input->post('saldo', TRUE));
            $remove = array(".", ",");
            $add = array("", "");

            $data = [
                'id_user'                       => $id_user,
                'saldo'                         => str_replace($remove, $add, $saldo),
                'type_user'                     => $this->input->post('type_user')
            ];

            $data2 = [
                'bank'                          => $this->input->post('bank'),
                'nama_pemilik'                  => $this->input->post('nama_pemilik'),
                'rekening'                      => $this->input->post('rekening'),
            ];


            $this->wallet->updatesaldowalletwithdraw($data, $data2);
            $this->session->set_flashdata('ubah', 'Permintaan berhasil ditambah');
            redirect('wallet');
        } else {
            $this->load->view('includes/header');
            $this->load->view('wallet/tambahwithdraw', $data);
            $this->load->view('includes/footer', $getview);
        }
    }
}

