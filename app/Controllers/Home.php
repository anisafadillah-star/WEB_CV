<?php

namespace App\Controllers;
use App\Models\BiodataModel;
use App\Models\SkillModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\PortfolioModel;

class Home extends BaseController
{
    public function index()
    {
        $biodataModel = new BiodataModel();
        $skillModel = new SkillModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $portfolioModel = new PortfolioModel();

        $data = [
            'title' => 'CV Saya - Mahasiswa Informatika',
            'biodata' => $biodataModel->first(),
            'skills' => $skillModel->findAll(),
            'pendidikan' => $pendidikanModel->findAll(),
            'pengalaman' => $pengalamanModel->findAll(),
            'portfolio' => $portfolioModel->findAll(),
        ];

        return view('home', $data);
    }
}
