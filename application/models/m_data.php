<?php
class m_data extends CI_Model
{
    function runQuery($query)
    {
        return  $this->db->query($query);
    }

    function getTableData($table)
    {
        return $this->db->get($table);
    }

    function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function getOrLike($where1, $where2,  $table)
    {
        $this->db->like($where1);
        $this->db->or_like($where2);
        return $this->db->get($table);
    }

    function getDistinct($table)
    {
        $this->db->distinct();
        return $this->db->get($table);
    }

    function inputData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function deleteData($where, $table)
    {
        $this->db->delete($table, $where);
    }
}