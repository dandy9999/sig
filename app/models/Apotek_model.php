<?php 

class Apotek_model {
    private $table = 'apotek';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllApotek()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getApotekById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataApotek($data)
    {
        $query = "INSERT INTO apotek
                    VALUES
                  ('', :nama, :lat, :lng, :descript, :hour)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lng', $data['lng']);
        $this->db->bind('descript', $data['descript']);
        $this->db->bind('hour', $data['hour']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataApotek($id)
    {
        $query = "DELETE FROM apotek WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataApotek($data)
    {
        $query = "UPDATE apotek SET
                    nama = :nama,
                    lat = :lat,
                    lng = :lng,
                    descript = :descript,
                    hour = :hour
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lng', $data['lng']);
        $this->db->bind('descript', $data['descript']);
        $this->db->bind('hour', $data['hour']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataApotek($keyword)
    {
        $query = "SELECT * FROM apotek WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}