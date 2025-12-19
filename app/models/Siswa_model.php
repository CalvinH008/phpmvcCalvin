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
    }