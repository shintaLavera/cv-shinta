<?php namespace App\Models;

use CodeIgniter\Model;

class CvModel extends Model
{
    public function getBiodata()
    {
        return $this->db->table('biodata')->get()->getRow();
    }

    public function getPendidikan()
    {
        return $this->db->table('pendidikan')->get()->getResultArray();
    }

    public function getPengalaman()
    {
        return $this->db->table('pengalaman')->orderBy('tahun', 'DESC')->get()->getResultArray();
    }

    public function getKeahlian()
    {
        return $this->db->table('keahlian')->get()->getResultArray();
    }
}