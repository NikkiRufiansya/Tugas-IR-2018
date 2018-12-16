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
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('form_berita');
    }

    function masukan_Berita(){
        $berita = $this->input->post('isi_berita');
        $data = array('text' => $berita);
        $url = 'https://api.prosa.ai/v1/topics';
        $urlHates = 'https://api.prosa.ai/v1/hates';
        //$urlSentiments = 'https://api.prosa.ai/v1/sentiments';
        $urlNormals = 'https://api.prosa.ai/v1/normals';


        $display =  $this->curl->postCURL($url,$data);
        $displayHates = $this->curl->postCURL($urlHates,$data);
        //$displaySentiments = $this->curl->postCURL($urlSentiments, $data);
        $displayNormals = $this->curl->postCURL($urlNormals,$data);

        $json_object = json_decode($display);
        $json_objectHates = json_decode($displayHates);
        //$json_objectSentiments = json_decode($displaySentiments);
        $json_objectNormals = json_decode($displayNormals);


        $topics = $json_object->topic;
        $confidence = $json_object->confidence;
        $hate_speech = $json_objectHates->hate_speech;
        $confidenceHates = $json_objectHates->confidence;
        // $sentiments = $json_objectSentiments->polarity;
        // $confidenceSentiments = $json_objectSentiments->confidence;
        $normals = $json_objectNormals->text;



        echo "News : " .$berita. "<br><br>";
        echo "Topics : " .$topics. "<br><br>";
        echo "Confidence : " .$confidence."<br><br>";
        if ($hate_speech == true) {
            echo "hate speech : true<br><br>";
        }elseif ($hate_speech == false) {
            echo "hate speech : false<br><br>";
        }
        echo "confidence hates : ".$confidenceHates."<br><br>";
        // echo "sentiments : " .$sentiments."<br><br>";
        // echo "confidence sentiments : " .$confidenceSentiments."<br><br>";
        echo "Word Normalizer : " .$normals;


       
    }

    function coba(){
        $this->load->view('welcome_message');
    }
}

?>