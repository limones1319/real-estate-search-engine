<?php

class Sitemap extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        //$this->load->model('posts_model');
        $this->load->library('sitemaps');
        $this->load->database();
        $this->load->helper('url');        
        
        //$posts = $this->posts_model->get_posts();
        $_extrage=$this->db->select('url');
        $_extrage=$this->db->distinct();
        $_extrage=$this->db->not_like('url', 'per_page');
        $_extrage=$this->db->not_like('url', 'anunt_id');
        $_extrage=$this->db->not_like('url', 'gclid');
        $_extrage=$this->db->not_like('url', 'contact');
        $_extrage=$this->db->like('url', '&amp;');
        $_extrage=$this->db->where('url !=', '');
        $_extrage=$this->db->order_by('id', 'desc');
        $_extrage=$this->db->get('jurnal');
        $posts=$_extrage->result_array();
//	echo $this->db->last_query();        

        foreach($posts AS $post)
        {
            $item = array(
                "loc" => site_url("index.php" . $post['url']),
                // ISO 8601 format - date("c") requires PHP5
                //"lastmod" => date("c", strtotime($post->last_modified)),
                "changefreq" => "daily",
                "priority" => "0.8"
            );
            
            $this->sitemaps->add_item($item);
        }
        
        // file name may change due to compression
        $file_name = $this->sitemaps->build("sitemap.xml");

        $reponses = $this->sitemaps->ping(site_url($file_name));
        
        // Debug by printing out the requests and status code responses
        // print_r($reponses);

//        redirect(site_url($file_name));
    }
}

