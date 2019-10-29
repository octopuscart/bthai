<?php

$menuitems = [
    array(
        "title" => "Home",
        "icon" => "ion-ios-home",
        "link" => site_url("/"),
        "class_1" => ""
    ),
    array(
        "title" => "About Us",
        "icon" => "ion-ios-list-box",
        "link" => site_url("aboutus"),
        "class_1" => ""
    ),
    array(
        "title" => "Menu",
        "icon" => "ion-ios-clipboard",
        "link" => site_url("our-menu"),
        "class_1" => ""
    ),
    array(
        "title" => "Book Now",
        "icon" => "ion-ios-create",
        "link" => site_url('booknow'),
        "class_1" => "highlight",
    ),
    array(
        "title" => "Gallery",
        "icon" => "ion-ios-images",
        "link" => site_url("gallery"),
        "class_1" => ""
    ),
    array(
        "title" => "Loyalty Program",
        "icon" => "ion-ios-contacts",
        "link" => site_url("loyalprogram"),
        "class_1" => ""
    ),
    array(
        "title" => "Contact Us",
        "icon" => "ion-ios-map",
        "link" => site_url('contact-us'),
        "class_1" => ""
    ),
];


$templogin = array(
    "title" => "Profile",
    "icon" => "ion-ios-person",
    "link" => site_url('Account/profile'),
);
$session_data = $this->session->userdata('logged_in');
if ($session_data) {
    array_push($menuitems, $templogin);
}
?>