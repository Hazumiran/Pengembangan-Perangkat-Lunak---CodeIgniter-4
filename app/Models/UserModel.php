<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'admin';
    protected $allowedFields = ['username', 'password', 'email'];
    protected $beforeInsert = ['hashPassword'];


    public function hashPassword(array $data)
    {
        dd($data['data']['password']);
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function findByEmail($username)
    {
        // return $this->where(['username' => $username])->first();
        return $query = $this->db->query("SELECT * FROM admin WHERE username='$username'")->getRowArray();
    }
    public function findByPas($password)
    {
        return $this->where(['password' => $password])->first();
    }
}
