<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'pertanyaan', 'bukti_dukung'];
    protected $useTimestamps = true;
}
