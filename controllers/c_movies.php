<?php

class movies_controller extends base_controller {

	public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        /*if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }*/
    }

    public function index() {

        # Set up the View
        $this->template->content = View::instance('v_movies_index');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Top Movies";

        # Render the View
        echo $this->template->content;
        //echo $view;

    }

    public function searchresults() {

        # Set up the View
        $this->template->content = View::instance('v_movies_searchresults');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Search results";
/*
        echo '<pre>';
        print_r($_POST[movies]);
        echo '</pre>';
*/
        $this->template->content->results = $_POST[movies];

        # Render the View
        echo $this->template->content;

    }

    public function toprentals() {
        # Set up the View
        $this->template->content = View::instance('v_movies_toprentals');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Top Rentals";

        $this->template->content->results = $_POST[movies];

        # Render the View
        echo $this->template->content;
    }

    public function intheaters() {
        # Set up the View
        $this->template->content = View::instance('v_movies_intheaters');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "In Theaters";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

     public function comingsoon() {
        # Set up the View
        $this->template->content = View::instance('v_movies_comingsoon');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Coming Soon";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }



   /* public function p_index() {
    	# Set up the view
    	$view = View::instance('v_movies_p_index');
    	echo $view;     

    } */

} # end of class

?>