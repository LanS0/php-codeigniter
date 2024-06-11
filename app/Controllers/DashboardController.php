<?php

namespace App\Controllers;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $modelMahasiswa = new UserModel();
        $data['mahasiswa'] = $modelMahasiswa->orderBy('id', 'DESC')->findAll();
        return view('admin', $data);
    }
}
