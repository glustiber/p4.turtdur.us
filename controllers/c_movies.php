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
        $this->template->title   = "Movies";

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

        $client_files_head = Array('/js/movie-details.js');
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
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

    public function boxoffice() {
        # Set up the View
        $this->template->content = View::instance('v_movies_boxoffice');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Box Office";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

    public function opening() {
        # Set up the View
        $this->template->content = View::instance('v_movies_opening');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Opening Soon";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

    public function currentreleases() {
        # Set up the View
        $this->template->content = View::instance('v_movies_currentreleases');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Current Releases";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

    public function newreleases() {
        # Set up the View
        $this->template->content = View::instance('v_movies_newreleases');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "New Releases";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

    public function upcomingdvds() {
        # Set up the View
        $this->template->content = View::instance('v_movies_upcomingdvds');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Upcoming DVDs";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }
   /* public function p_index() {
    	# Set up the view
    	$view = View::instance('v_movies_p_index');
    	echo $view;     

    } */

    public function details() {
        # Set up the View
        $this->template->content = View::instance('v_movies_details');
        //$view = View::instance('v_movies_index');
        $this->template->title   = "Movie details";

        $this->template->content->results = $_POST[movies];
        
        # Render the View
        echo $this->template->content;
    }

} # end of class

?>