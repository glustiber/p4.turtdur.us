<?php

class reviews_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        if(!$this->user) {
            Router::redirect("/users/login"); 
        }
    }

    public function add($movie_id) {

        $this->template->content = View::instance('v_reviews_add');
        $this->template->title   = "Write a Review";
        $this->template->content->movie_id = $movie_id;

        echo $this->template;

    }

    public function p_add($movie_id,$movie_title) {

        $_POST['user_id']  = $this->user->user_id;
        $_POST['first_name']  = $this->user->first_name;
        $_POST['last_name']  = $this->user->last_name;
        $_POST['movie_id'] = $movie_id;
        $_POST['movie_title'] = $movie_title;
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('reviews', $_POST);

        # Redirect to profile.
        Router::redirect("/users/profile");

    }

} # end of class

?>