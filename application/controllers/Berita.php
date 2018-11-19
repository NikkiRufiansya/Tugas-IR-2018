<?php
/**
 * 
 */
class Berita extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->library('curl');
        $this->load->helper('form');
	}

	function index(){
        $this->load->view('form_berita');
    }

    function masukan_Berita(){
    	$berita = $this->input->post('isi_berita');
    	$data = array('text' => $berita);
    	$url = 'https://api.prosa.ai/v1/topics';
        echo $this->curl->postCURL($url, $data);  
    }

    function coba(){
        $this->load->view('welcome_message');
    }
}

?>