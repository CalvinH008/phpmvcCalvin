    <?php

    class Siswa_model{
        private $table = 'siswa';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllSiswa(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->setResult();
        }

        public function getSiswaById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind(':id', $id);
            return $this->db->single();
        }

        public function tambahDataSiswa($data){
            $query = "INSERT INTO siswa (id, nama, nik, email, jurusan) VALUES (:id, :nama, :nik, :email,:jurusan)";
            $this->db->query($query);
            $this->db->bind('id', $data["id"]);
            $this->db->bind('nama', $data["nama"]);
            $this->db->bind('nik', $data["nik"]);
            $this->db->bind('email', $data["email"]);
            $this->db->bind('jurusan', $data["jurusan"]);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataSiswa($id){
           $query = "DELETE FROM siswa WHERE id = :id";
           $this->db->query($query);
           $this->db->bind('id', $id);
           $this->db->execute();

           return $this->db->rowCount();
        }
    }