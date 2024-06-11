<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class MahasiswaCRUD extends Controller
{
    // show names list
    public function index(){
        $mahasiswaModel = new UserModel();
        $data['mahasiswa'] = $mahasiswaModel->findAll();
        return view('admin', $data);
    }

    public function create(){
        // NGAMBIL MODEL YANG DI CREATE
        $mahasiswaModel = new UserModel();

        // CREATE DATANYA
        $mahasiswaModel->insert($this->request->getPost());

        return redirect()->to("http://localhost:8080/listMahasiswa");
    }

    public function update(){
        // NGAMBIL MODEL YANG DI CREATE
        $mahasiswaModel = new UserModel();

        // CREATE DATANYA
        $mahasiswaModel->update($this->request->getPost('nim'), $this->request->getPost());

        return redirect()->to("http://localhost:8080/listMahasiswa");
    }

    public function delete($nim = false){
        // NGAMBIL MODEL YANG DI CREATE
        $mahasiswaModel = new UserModel();

        // CREATE DATANYA
        $mahasiswaModel->delete($nim);

        return redirect()->to("http://localhost:8080/listMahasiswa");
    }
}
