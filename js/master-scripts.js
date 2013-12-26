$('#nav-list > li > a').click(function(){

	if ($(this).attr('class') != 'active'){
		$('#nav-list li ul').slideUp();
	  	$(this).next().slideToggle();
	  	$('#nav-list li a').removeClass('active');
	  	$(this).addClass('active');
	} 

});

/*
$(document).ajaxComplete(function(){
    // fire when any Ajax requests complete
    console.log('WHAT');
    $('.additional-info').css('display','none');
	$('.movie-info').click(function() {
		var movieId = $(this).attr('id');
		console.log(movieId);
		$('#'+movieId+'info').css('display','block');
	});

});*/

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

	function searchCallback(data) {
		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/searchresults',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);
			},
		});
	}

	// callback for when we get back the results
	/*function searchCallback(data) {
	 	$('.inner-content').html('Found ' + data.total + ' results for ' + query);
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>')
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>')

	 	});
	}*/

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

	function searchCallback(data) {
		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/searchresults',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);
			},
		});
	}

	// callback for when we get back the results
	/*function searchCallback(data) {
	 	$('.inner-content').html('Found ' + data.total + ' results for ' + query);
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + ' (' + movie.year + ')' + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>');
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>');
	 		$('.inner-content').append('<div class="clear"></div>');

	 	});
	} */   
} 

});

/*
// Activate menu, vid games, etc
$('#nav-list > li').click(function() {

	//console.log($(this).attr('id'));

    $.ajax({
    	type: "POST",
    	url: "/" + $(this).attr('id'),
        success: function(response) { 

        	//console.log(response);
            $('.inner-content').html(response);

        },

    });

});
*/

//var apikey = "u8fuatjbufuhjzsq8rtg9bgt";
//var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0";

var topRentalsUrl = baseUrl + '/lists/dvds/top_rentals.json?limit=15&country=us&apikey=' + apikey;
var inTheatersUrl = baseUrl + '/lists/movies/in_theaters.json?page_limit=15&page=1&country=us&apikey=' + apikey;
var comingSoonUrl = baseUrl + '/lists/movies/upcoming.json?page_limit=15&page=1&country=us&apikey=' + apikey;
var boxOfficeUrl = baseUrl + '/lists/movies/box_office.json?limit=15&country=us&apikey=' + apikey;
var openingUrl = baseUrl + '/lists/movies/opening.json?limit=15&country=us&apikey=' + apikey;
var currentReleasesUrl = baseUrl + '/lists/dvds/current_releases.json?page_limit=15&page=1&country=us&apikey=' + apikey;
var newReleasesUrl = baseUrl + '/lists/dvds/new_releases.json?page_limit=15&page=1&country=us&apikey=' + apikey;
var upcomingDvdsUrl = baseUrl + '/lists/dvds/upcoming.json?page_limit=15&page=1&country=us&apikey=' + apikey;

$('#top-rentals').click(function() {

	$.ajax({
	    url: topRentalsUrl,
	    dataType: "jsonp",
	    /*beforeSend: function() {
            // Display a loading message while waiting for the ajax call to complete
            $('.inner-content').html("<h2>Loading...</h2>");
        },*/
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/toprentals',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

		/*
	 	$('.inner-content').html('<h2>Top 10 Movie Rentals</h2>');
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>')
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>')
	 		$('.inner-content').append('<div class="clear"></div>')

	 	});*/
	}

});

$('#in-theaters').click(function() {

	$.ajax({
	    url: inTheatersUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/intheaters',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);
				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
/*
				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$.ajax({
						type:'POST',
						url:'/reviews/add/'+ movieId,
						success: function(response) {
							$('.inner-content').html(response);
						},
					});
					return false;
				});				
*/
			},

		});

		/*
	 	$('.inner-content').html('<h2>Currently in Theaters</h2>');
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>')
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>')
	 		$('.inner-content').append('<div class="clear"></div>')

	 	});*/
	}

});

$('#coming-soon').click(function() {

	$.ajax({
	    url: comingSoonUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/comingsoon',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	 	/*$('.inner-content').html('<h2>Coming Soon to a Theater Near You</h2>');
	 	var movies = data.movies;
	 	$.each(movies, function(index, movie) {
	   		$('.inner-content').append('<h2>' + movie.title + '</h2>');
	   		$('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
	 		$('.inner-content').append('<p>Critics Score: ' + movie.ratings.critics_score + '</p>')
	 		$('.inner-content').append('<p>Audience Score: ' + movie.ratings.audience_score + '</p>')
	 		$('.inner-content').append('<div class="clear"></div>')

	 	});*/
	}

});

$('#box-office').click(function() {

	$.ajax({
	    url: boxOfficeUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/boxoffice',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	}

});

$('#opening').click(function() {

	$.ajax({
	    url: openingUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/opening',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	}

});

$('#current-releases').click(function() {

	$.ajax({
	    url: currentReleasesUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/currentreleases',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	}

});

$('#new-releases').click(function() {

	$.ajax({
	    url: newReleasesUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/newreleases',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	}

});

$('#upcoming-dvds').click(function() {

	$.ajax({
	    url: upcomingDvdsUrl,
	    dataType: "jsonp",
	    success: searchCallback
	});

	// callback for when we get back the results
	function searchCallback(data) {

		var movies = data;

		$.ajax({
			type:'POST',
			url:'/movies/upcomingdvds',
			data: movies,
			success: function(response) {
				$('.inner-content').html(response);

				$('.additional-info').css('display','none');
				$('.write-review').css('display','none');

				$('.movie-info').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'info').toggle();
					return false;
				});

				$('.review').click(function() {
					var movieId = $(this).attr('id');
					//console.log(movieId);
					//$('#'+movieId+'info').css('display','none');
					$('#'+movieId+'review').toggle();
					return false;
				});

				$('.rating').on('change', function() { 
					console.log($(this).attr('id'));
					console.log($(this).val());
					var movieId = $(this).attr('id');
					var currentRating = $(this).val();
					$('#'+movieId + 'current').html(currentRating);
				});
			},
		});

	}

});

/*
$('#movies').click(function() {

	$.ajax({
		type:'POST',
		url:'/movies',
		success: function(response) {
			$('.inner-content').html(response);
		},
	});

});
*/
$('#tvshows').click(function() {

	$.ajax({
		type:'POST',
		url:'/tvshows',
		success: function(response) {
			$('.inner-content').html(response);
		},
	});

});

$('#music').click(function() {

	$.ajax({
		type:'POST',
		url:'/music',
		success: function(response) {
			$('.inner-content').html(response);
		},
	});

});

$('#videogames').click(function() {

	$.ajax({
		type:'POST',
		url:'/videogames',
		success: function(response) {
			$('.inner-content').html(response);
		},
	});

});

$('#books').click(function() {

	$.ajax({
		type:'POST',
		url:'/books',
		success: function(response) {
			$('.inner-content').html(response);
		},
	});

});

