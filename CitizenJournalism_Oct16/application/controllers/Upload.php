<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('news_model');
		$this->load->model('category_model');
		$this->load->library('session');
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|bmp|avi|flv|mpeg|mpg|swf|mp4|wmv|mp3|3gp|wmv3';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		foreach ($_FILES as $key => $value) {
			if ( ! $this->upload->do_upload($key))
			{
				$error = array('error' => $this->upload->display_errors());
                var_dump($error);
				//$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
                //var_dump($data);
				if($this->session->userdata('n_id')){
				    $n_id = $this->session->userdata('n_id');
					$this->session->unset_userdata('n_id');
				}
				else
					$n_id = $this->news_model->get_last_news_id();
					
				 $multdata = array(
					'url'=> "uploads/".$data['upload_data']['file_name'],
					'type'=> $data['upload_data']['file_type'],
					'n_id'=> $n_id
				  );
				  
				  $this->db->insert('multimedia', $multdata);
				//$this->load->view('upload_success', $data);
			}
		}
	}
}
?>