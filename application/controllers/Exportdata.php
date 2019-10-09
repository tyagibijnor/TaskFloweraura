<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportdata extends CI_Controller {

	public function __construct()
    {
    parent::__construct();
    $this->load->model("exportdata_model");
    $data = array();
    }
	public function index(){
    $data['title'] = 'MySql Table Data';
    $data['header'] = $this->load->view('header', $data , TRUE);
    $data['content']    = $this->exportdata_model->getTableData();
    $data['footer'] = $this->load->view('footer', $data , TRUE);
    $this->load->view('home', $data); 
   }
}
