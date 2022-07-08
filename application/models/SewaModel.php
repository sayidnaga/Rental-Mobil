<?php
class SewaModel extends CI_Model
{
    function getAll()
    {
        $query = $this->db->get('sewa');
        return $query->result();
    }

    function findById($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('sewa');
        return $query->row();
    }

    function store($data)
    {
        $sql = "INSERT INTO sewa (id,tanggal_mulai,tanggal_akhir,tujuan,noktp,users_id,mobil_id) VALUES (default,?,?)";
        $this->db->query($sql,$data);
    }

    function delete($id)
    {
        $sql = "DELETE FROM sewa WHERE id=?";
        $this->db->query($sql,[$id]);
    }

    function update($data)
    {
        $sql = "UPDATE sewa SET nama=?, produk=? WHERE id=?";
        $this->db->query($sql,$data);
    }

}
