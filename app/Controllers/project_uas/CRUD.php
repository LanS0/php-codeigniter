<?php
namespace App\Controllers\Project_uas;
use App\Models\project_uas\KelasModel;
use App\Models\project_uas\MemberModel;
use CodeIgniter\Controller;

class CRUD extends Controller {

    public function create(){
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
            'membership' => 0,
            'is_valid' => true ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // NGAMBIL MODEL YANG DI CREATE
        $memberModel = new MemberModel();

        // CREATE DATANYA
        $memberModel->insert($data);

        return redirect()->to(base_url("/"));
    }

    public function createUser(){
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'membership' => 0,
            'is_valid' => true ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // NGAMBIL MODEL YANG DI CREATE
        $memberModel = new MemberModel();

        // CREATE DATANYA
        $memberModel->insert($data);

        return redirect()->to(base_url("/listMember"));
    }

    public function createPW(){
        $data = [
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // NGAMBIL MODEL YANG DI CREATE
        $memberModel = new MemberModel();

        // CREATE DATANYA
        $memberModel->update($this->request->getPost('id') ,$data);

        return redirect()->to(base_url("/"));
    }

    public function createKelas(){
        $data = [
            'name' => $this->request->getPost('name'),
            'harga' => $this->request->getPost('harga'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // NGAMBIL MODEL YANG DI CREATE
        $kelasModel = new KelasModel();

        // CREATE DATANYA
        $kelasModel->insert($data);

        return redirect()->to(base_url("/listKelas"));
    }

    public function updateMember(){
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'is_valid' => $this->request->getPost('is_valid') ? 1 : 0,
            'updated_at' => date('Y-m-d H:i:s') ,
        ];
        
        // NGAMBIL MODEL YANG DI CREATE
        $mahasiswaModel = new MemberModel();

        // CREATE DATANYA
        $mahasiswaModel->update($this->request->getPost('id'), $data);

        return redirect()->to(base_url("/listMember"));
    }

    public function updateMembership(){
        $data = [
            'membership' => $this->request->getPost('kelas-id'),
            'updated_at' => date('Y-m-d H:i:s') ,
        ];

        // NGAMBIL MODEL YANG DI CREATE
        $memberModel = new MemberModel();

        // CREATE DATANYA
        $memberModel->update($this->request->getPost('member-id'), $data);

        return redirect()->to(base_url("/dashboardMember"));
    }

    public function updateKelas(){
        // NGAMBIL MODEL YANG DI CREATE
        $kelasModel = new KelasModel();

        // CREATE DATANYA
        $kelasModel->update($this->request->getPost('id'), $this->request->getPost());

        return redirect()->to(base_url("/listKelas"));
    }


    public function deleteMember($id = 0){
        // NGAMBIL MODEL YANG DI CREATE
        $memberModel = new MemberModel();

        // CREATE DATANYA
        $memberModel->delete($id);

        return redirect()->to(base_url("/listMember"));
    }

    public function deleteKelas($id = 0){
        // NGAMBIL MODEL YANG DI CREATE
        $kelasModel = new KelasModel();

        // CREATE DATANYA
        $kelasModel->delete($id);

        return redirect()->to(base_url("/listKelas"));
    }

}

?>