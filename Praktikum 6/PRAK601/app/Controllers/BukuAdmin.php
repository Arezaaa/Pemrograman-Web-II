<?php namespace App\Controllers;

use \App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BukuAdmin extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        $data['bukus'] = $buku->findAll();
        echo view('admin_list_buku', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $buku = new BukuModel();
        $data['buku'] = $buku->where('id', $id)->first();
        
        if(!$data['buku']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('buku_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $buku = new BukuModel();
            $buku->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }
        
        // tampilkan form create
        echo view('admin_create_buku');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil buku yang akan diedit
        $buku = new BukuModel();
        $data['buku'] = $buku->where('id', $id)->first();
        
        // lakukan validasi data buku
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'judul' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, maka simpan ke database
        if($isDataValid){
            $buku->update($id, [
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }

        // tampilkan form edit
        echo view('admin_edit_buku', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id){
        $buku = new BukuModel();
        $buku->delete($id);
        return redirect('admin/buku');
    }
}