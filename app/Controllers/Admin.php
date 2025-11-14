<?php

namespace App\Controllers;
use App\Models\ContactModel;

class Admin extends BaseController
{
    public function messages()
    {
        $contactModel = new ContactModel();
        $data['contacts'] = $contactModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/messages', $data);
    }

    public function delete($id)
    {
        $contactModel = new ContactModel();
        $contactModel->delete($id);
        session()->setFlashdata('success', 'Pesan berhasil dihapus 🗑️');
        return redirect()->to(base_url('admin/messages'));
    }
}
