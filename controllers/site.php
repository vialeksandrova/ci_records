<?php

class Site extends CI_Controller{

function index()
{
$data = array();
//$this->load->view('options_view');

if($query = $this->site_model->get_records()){
$data['records'] = $query;
}
$this->load->view('options_view', $data);
}

function create()
{
$data = array(
'title'=>$this->input->post('title'),
'author'=>$this->input->post('author'),
);

$this->site_model->add_record($data);
$this->index();
}


function update()//update се вижда само в БД
{
$data = array(
'title'=>"The new record",
'author'=>"Vi Aleksandrova",
);
$this->site_model->update_record($data);
$this->index();
}


function delete()
{
$this->site_model->delete_row();
$this->index();
}

}
