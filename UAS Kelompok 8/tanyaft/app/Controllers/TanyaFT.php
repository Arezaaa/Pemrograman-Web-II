<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Shield\Models\UserModel; // Import UserModel from Shield

class TanyaFT extends BaseController
{
    protected $pengajuanModel;
    protected $userModel;

    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
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

// Function to sanitize file names
function sanitizeFileName($fileName) {
    // Replace spaces and disallowed characters with underscores
    return preg_replace('/[^a-zA-Z0-9\-_\.]/', '_', $fileName);
}

    // Handle file upload
    $file = $this->request->getFile('bukti_dukung');
    if ($file->isValid() && !$file->hasMoved()) {
        // Get the original name and sanitize it
        $originalName = $file->getClientName();
        $sanitizedFileName = sanitizeFileName($originalName);

        // Move the file to the public/uploads directory with the sanitized name
        $file->move(FCPATH . 'uploads', $sanitizedFileName);

        // Save data to the database with the relative file path
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'bukti_dukung' => 'uploads/' . $sanitizedFileName, // Save the relative path
        ];

        // Assume you have a model called 'PengajuanModel' to handle database operations
        $this->pengajuanModel->insert($data);

        // Provide feedback to the user
        return redirect()->to('/tanyaft')->with('message', 'File uploaded successfully');
    } else {
        // Handle the error
        return redirect()->back()->with('error', 'File upload failed');
    }

    }
}