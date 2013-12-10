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
    $this->template->title   = "Top Movies";

    # Render the View
    echo $this->template;

    }

   /* public function p_index() {
    	# Set up the view
    	$view = View::instance('v_movies_p_index');
    	echo $view;     

    } */

} # end of class

?>