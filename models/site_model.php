<?php

class Site_model extends CI_Model{

function get_records()
{
$query = $this->db->get('data');//от коя табл. ще вземем записите
return $query->result();
}

function add_record($data)
{
$this->db->insert('data',$data);//в коя таблица ще добавим
}

function update_record($data)
{
$this->db->where('id', 11);
$this->db->update('data',$data);
}

function delete_row()
{
$this->db->where('id', $this->uri->segment(3));//сегменти са всички /.../след index.php
$this->db->delete('data');
}

}
