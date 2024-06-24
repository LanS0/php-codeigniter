<?php

namespace App\Controllers\project_uas;
use App\Controllers\BaseController;
use App\Models\project_uas\KelasModel;
use App\Models\project_uas\MemberModel;

class ViewController extends BaseController
{
    public function login(): string
    {
        return view("project-uas/login");
    }

    public function logout()
    {
        // Hapus semua session
        $session = session();
        $session->destroy();

        return redirect()->to(base_url("/"));
    }

    public function checkLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $memberModel = new MemberModel();
        $data['member'] = $memberModel->where("CONCAT(username, email) LIKE '%" . $email . "%'")->first();

        if ($data && password_verify($password, $data['member']['password'])) {
            // Password cocok, set session
            session()->set('logged_in', true);
            session()->set('username', $data['member']['username']);

            if ($data['member']['role'] == 1) {
                return redirect()->to(base_url("/dashboard"));
            } else if ($data['member']['role'] == 2) {
                return redirect()->to(base_url("/dashboardMember"));
            }
            
        } else {
            // Password tidak cocok atau pengguna tidak ditemukan
            if ($data) {
                session()->set('username', $data['member']['username']);
                return redirect()->to(base_url("/createPassword"));
            }

            return redirect()->to(base_url("/"));
        }
    }

    public function createPassword()
    {
        // Ambil informasi pengguna dari session
        $username = session()->get('username');
    
        // Tampilkan halaman dashboard dengan informasi pengguna
        $memberModel = new MemberModel();
        $data['member'] = $memberModel->where("username LIKE '%" . $username . "%'")->first();

        return view('project-uas/createPassword', $data);
    }

    public function register(): string
    {
        return view('project-uas/register');
    }

    public function dashboard()
    {
        if (! session()->get('logged_in')) {
            // Jika belum login, redirect ke halaman login
            return redirect()->to(base_url("/"));
        }
    
        // Ambil informasi pengguna dari session
        $username = session()->get('username');
    
        // Tampilkan halaman dashboard dengan informasi pengguna
        $memberModel = new MemberModel();
        $data['member'] = $memberModel->where("username LIKE '%" . $username . "%'")->first();
        $data['total'] = $memberModel->select("*, COUNT(*) OVER() total")->findAll();

        return view('project-uas/dashboard',  $data);
    }

    public function dashboardMember()
    {
        if (! session()->get('logged_in')) {
            // Jika belum login, redirect ke halaman login
            return redirect()->to(base_url("/"));
        }
    
        // Ambil informasi pengguna dari session
        $username = session()->get('username');
    
        // Tampilkan halaman dashboard dengan informasi pengguna
        $memberModel = new MemberModel();
        $kelasModel = new KelasModel();
        
        $data['member'] = $memberModel->where("username LIKE '%" . $username . "%'")->first();
        $data['kelas'] = $kelasModel->findAll();

        return view('project-uas/dashboardMember', $data);
    }

    public function listMember(): string
    {
        $modelMember = new MemberModel();
        $data['member'] = $modelMember->findAll();
        return view('project-uas/sidebar/listMember', $data);
    }

    public function listKelas(): string
    {
        $modelKelas = new KelasModel();
        $data['kelas'] = $modelKelas->findAll();
        return view('project-uas/sidebar/listKelas', $data);
    }
}
