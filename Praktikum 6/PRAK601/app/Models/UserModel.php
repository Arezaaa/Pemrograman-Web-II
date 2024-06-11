<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'email', 'password'];
    protected $useTimeStamps = true;

    protected $validationRules = [
        'username' => 'required|is_unique[user.username]',
        'email'    => 'required|valid_email',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Maaf, nama user tersebut telah diambil. Tolong pilih yang lain.'
        ]
    ];
    
    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}