<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Buku extends BaseController
{
    public function index()
    {
        // Create an object of BukuModel
        $buku = new BukuModel();

        // Prepare data to be sent to the view with the name $bukus
        // and fill it with published books
        $data['bukus'] = $buku->where('tahun_terbit <=', date('Y'))->findAll();

        // Send data to the view
        echo view('buku', $data);
    }

    //------------------------------------------------------------

    public function viewBuku($id)
    {
        $buku = new BukuModel();
        $data['buku'] = $buku->where([
            'id' => $id,
        ])->first();

        // Display 404 error if data is not found
        if (!$data['buku']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('buku_detail', $data);
    }
}