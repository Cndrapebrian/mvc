<?php

class Pemesan_model {
    private $table = 'pemesan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
        public function getAllPemesan()
        {
          $this->db->query('SELECT * FROM ' . $this->table);
          return $this->db->resultSet();
        }

     public function getPemesanById($id)
     {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
     }

     public function tambahDataPemesan($data)
     {
      $query = "INSERT INTO pemesan 
      VALUES 
      ('', :nama, :nip, :email, :alamat)";

      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nip', $data['nip']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('alamat', $data['alamat']);

      $this->db->execute();

      return $this->db->rowCount();
     }

     public function hapusDataPemesan($id)
     {
      $query = "DELETE FROM pemesan WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
     }

     public function cariDataPemesan()
     {
      $keyword = $_POST['keyword'];
      $query = "SELECT * FROM pemesan WHERE nama LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");
      return $this->db->resultSet();
     }
   

     public function ubahDataPemesan($data)
     {
      $query = "UPDATE pemesan SET
      nama = :nama,
      nip = :nip,
      email = :email,
      alamat = :alamat
      WHERE id = :id";

      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nip', $data['nip']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('alamat', $data['alamat']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();
     }
}

