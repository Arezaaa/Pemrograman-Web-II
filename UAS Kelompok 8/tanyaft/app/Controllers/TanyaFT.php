<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Shield\Models\UserModel; // Import UserModel from Shield

class TanyaFT extends BaseController
{
    protected $pengajuanModel;
    protected $userModel;

    public function __construct()
    {
        $this->pengajuanModel = new QuestionModel();
        $this->userModel = new UserModel();
    }

    public function main()
    {
        $data['pengajuan'] = $this->pengajuanModel->findAll();
        return view('tanyaft/main', $data);
    }

    public function pengajuan()
    {
        return view('tanyaft/pengajuan');
    }

    public function tanggapan($id)
    {
        // Mengambil data pengajuan berdasarkan ID
        $data['pengajuan'] = $this->pengajuanModel->find($id);

        if (!$data['pengajuan']) {
            throw new \Exception('Pengajuan tidak ditemukan.');
        }

        return view('tanyaft/tanggapan', $data);
    }

    public function detailPengajuan($id)
    {
        // Mengambil data pengajuan berdasarkan ID
        $data['pengajuan'] = $this->pengajuanModel->find($id);

        if (!$data['pengajuan']) {
            throw new \Exception('Pengajuan tidak ditemukan.');
        }

        return view('tanyaft/detailPengajuan', $data);
    }

    public function submit()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'program_studi' => 'required',
            'pertanyaan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Handle file upload
        $file = $this->request->getFile('berkas_pendukung');
        $fileName = $file->getClientName();
        $file->move(WRITEPATH . 'uploads', $fileName);

        // Simpan data ke database
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'berkas_pendukung' => $fileName,
        ];
        $this->pengajuanModel->save($data);

        return redirect()->to('/tanya-ft');
    }
}
