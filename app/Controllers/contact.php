<?php

namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function send()
    {
        $contactModel = new ContactModel();

        // Ambil data dari form & validasi sederhana
        $data = [
            'name'      => esc($this->request->getPost('name')),
            'email'     => esc($this->request->getPost('email')),
            'subject'   => esc($this->request->getPost('subject')),
            'message'   => esc($this->request->getPost('message')),
            'created_at'=> date('Y-m-d H:i:s'),
        ];

        // Simpan ke database (pastikan ContactModel sudah benar)
        if ($contactModel->insert($data)) {
            session()->setFlashdata('success', 'Terima kasih, <b>' . esc($data['name']) . '</b>! Pesanmu sudah terkirim 💖');
        } else {
            session()->setFlashdata('error', 'Maaf, terjadi kesalahan. Coba lagi ya 😢');
        }

        // Balik ke bagian contact di halaman utama
        return redirect()->to(base_url('/#contact'));
    }
}
