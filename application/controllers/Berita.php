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
        //$this->load->helper('form');
	}

	function index(){
        $this->load->view('form_berita1');
    }

    function masukan_Berita(){
    	$berita = $this->input->post('isi_berita');
    	$data = array('text' => $berita);
    	$url = 'https://api.prosa.ai/v1/topics';
        $urlHates = 'https://api.prosa.ai/v1/hates';
        
        $display =  $this->curl->postCURL($url,$data);
        $displayHates = $this->curl->postCURL($urlHates,$data);
        $json_object = json_decode($display);
        $json_objectHates = json_decode($displayHates);
        $topics = $json_object->topic;
        $confidence = $json_object->confidence;
        $hate_speech = $json_objectHates->hate_speech;
        $confidenceHates = $json_objectHates->confidence;
        echo "News : " .$berita. "<br><br>";
        echo "Topics : " .$topics. "<br><br>";
        echo "Confidence : " .$confidence."<br><br>";
        if ($hate_speech == true) {
            echo "hate speech : true<br><br>";
        }elseif ($hate_speech == false) {
            echo "hate speech : false<br><br>";
        }
        echo "confidence hates : ".$confidenceHates;


       
    }

    function coba(){
        $this->load->view('welcome_message');
    }
}

?>