<?php

class Sitemap extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // We load the url helper to be able to use the base_url() function
        $this->load->helper('url');

        $this->load->model('SitemapModel');


        $this->menuitems = [
            array(
                "title" => "Home",
                "icon" => "ion-ios-home",
                "link" => site_url("/"),
                "class" => ""
            ),
            array(
                "title" => "About Us",
                "icon" => "ion-ios-list-box",
                "link" => site_url("aboutus"),
                "class" => ""
            ),
            array(
                "title" => "Menu",
                "icon" => "ion-ios-clipboard",
                "link" => site_url("our-menu"),
                "class" => ""
            ),
            array(
                "title" => "Book Now",
                "icon" => "ion-ios-create",
                "link" => site_url('booknow'),
                "class" => "",
            ),
            array(
                "title" => "Gallery",
                "icon" => "ion-ios-images",
                "link" => site_url("gallery/food"),
                "class" => ""
            ),
            array(
                "title" => "Private Parties/Catering",
                "icon" => "ion-ios-beer",
                "link" => site_url("private_parties"),
                "class" => ""
            ),
            array(
                "title" => "Loyalty Program",
                "icon" => "ion-ios-contacts",
                "link" => site_url("loyalprogram"),
                "class" => ""
            ),
            array(
                "title" => "Contact Us",
                "icon" => "ion-ios-map",
                "link" => site_url('contact-us'),
                "class" => ""
            ),
        ];

        // Array of some articles for demonstration purposes
    }

    /**
     * Generate a sitemap index file
     * More information about sitemap indexes: http://www.sitemaps.org/protocol.html#index
     */
    public function index() {
        $this->SitemapModel->add(base_url(), NULL, 'monthly', 1);
        foreach ($this->menuitems as $key => $value) {
            $this->SitemapModel->add($value['link'], NULL, 'monthly', 0.9);
        }
        $this->SitemapModel->output();
    }

    /**
     * Generate a sitemap both based on static urls and an array of urls
     */
    public function general() {
        
        $sitemap = [];
        foreach ($this->menuitems as $key => $value) {
            $element = array('title' => $value['title'], 'url' => $value['link'], 'suburl' => array());
            array_push($sitemap, $element);
        }
        $data['sitemap'] = $sitemap;
        $this->load->view('Pages/sitemap', $data);
    }

    /**
     * Generate a sitemap only on an array of urls
     */
}
