
  $('#nav-list > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav-list li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav-list li a').removeClass('active');
      $(this).addClass('active');
    }
  });

var apikey = "u8fuatjbufuhjzsq8rtg9bgt";
var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0";

// construct the uri with our apikey
var moviesSearchUrl = baseUrl + '/movies.json?apikey=' + apikey;

$('#search-bar-submit').click(function() {

	var query = $('#search-bar-input').val();

  	// send off the query
	$.ajax({
	    url: moviesSearchUrl + '&q=' + encodeURI(query) + '&page_limit=10',
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {
	 	$('.inner-content').append('Found ' + data.total + ' results for ' + query);
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>')
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>')

	 	});
	}

});

$('#search-bar-input').keypress(function (e) {

    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
        //$('button[type=submit] .default').click();
        //return false;
	var query = $('#search-bar-input').val();

  	// send off the query
	$.ajax({
	    url: moviesSearchUrl + '&q=' + encodeURI(query) + '&page_limit=10',
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {
	 	$('.inner-content').append('Found ' + data.total + ' results for ' + query);
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + ' (' + movie.year + ')' + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>');
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>');
	 		$('.inner-content').append('<div class="clear"></div>');

	 	});
	}    } 

});
/*
$('#movies').click(function() {

    $.ajax({
        type: 'POST',
        url: '/movies',
        beforeSubmit: function() {
        	$('#movies-index').html("Loading...");
    	},
        success: function(response) { 

            // For debugging purposes
            // console.log(response);

            // Example response: {"post_count":"9","user_count":"13","most_recent_post":"May 23, 2012 1:14am"}

            // Parse the JSON results into an array
            //var data = $.parseJSON(response);

            // Inject the data into the page
            $('#movies-index').html('<p>TESTING 123</p>');
           
        },
    });
});
*/




