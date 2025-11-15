<?php namespace App\Controllers;

use App\Models\CvModel;
use CodeIgniter\Controller;

class CvController extends Controller
{
    protected $cvModel;

    public function __construct()
    {
        $this->cvModel = new CvModel();
    }

    // --- Fungsi Bantuan untuk Mengambil Semua Data ---
    private function getAllData()
    {
        $data = [
            'title' => 'Curriculum Vitae',
            'biodata' => $this->cvModel->getBiodata(),
            'pendidikan' => $this->cvModel->getPendidikan(),
            'pengalaman' => $this->cvModel->getPengalaman(),
            'keahlian' => $this->cvModel->getKeahlian(),
        ];
        return $data;
    }

    // =================================================================
    // 1. Halaman HOME (Beranda Ringkasan)
    // =================================================================
    public function index()
    {
        $data = $this->getAllData();
        $data['active_nav'] = 'home';
        // Memuat View Ringkasan (halaman_home.php)
        return view('cv/halaman_home', $data);
    }

    // =================================================================
    // 2. Halaman PENDIDIKAN (Halaman Detail Sendiri)
    // =================================================================
    public function pendidikan()
    {
        $data = $this->getAllData();
        $data['title'] = 'Pendidikan | Shinta CV';
        $data['active_nav'] = 'pendidikan';
        // Memuat View Detail Pendidikan
        return view('cv/halaman_pendidikan', $data);
    }

    // =================================================================
    // 3. Halaman PENGALAMAN (Halaman Detail Sendiri)
    // =================================================================
    public function pengalaman()
    {
        $data = $this->getAllData();
        $data['title'] = 'Pengalaman | Shinta CV';
        $data['active_nav'] = 'pengalaman';
        // Memuat View Detail Pengalaman
        return view('cv/halaman_pengalaman', $data);
    }

    // =================================================================
    // 4. Halaman KEAHLIAN (Halaman Detail Sendiri)
    // =================================================================
    public function keahlian()
    {
        $data = $this->getAllData();
        $data['title'] = 'Keahlian | Shinta CV';
        $data['active_nav'] = 'keahlian';
        // Memuat View Detail Keahlian
        return view('cv/halaman_keahlian', $data);
    }
}