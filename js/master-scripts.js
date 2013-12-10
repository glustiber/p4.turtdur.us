$(document).ready(function() {
   $(window).resize();
});


$(window).resize(function() {
   if ($(this).width() > 1024) {

$(document).ready(function () {
  $('#nav-list > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav-list li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav-list li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});

   }

   else {

   	$(document).ready(function () {
  $('#nav-list > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav-list li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});

   }



});


$(document).ready(function() {

var apikey = "u8fuatjbufuhjzsq8rtg9bgt";
var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0";

// construct the uri with our apikey
var moviesSearchUrl = baseUrl + '/movies.json?apikey=' + apikey;
var query = $('#search-bar-input').val;


//console.log(query);

$('#search-bar-submit').click(function() {


  // send off the query
  $.ajax({
    url: moviesSearchUrl + '&q=' + encodeURI(query),
    dataType: "jsonp",
    success: searchCallback
  });
});

// callback for when we get back the results
function searchCallback(data) {
 /*$('.inner-content').append('Found ' + data.total + ' results for ' + query);*/
 var movies = data.movies;
 $.each(movies, function(index, movie) {
   $('.inner-content').append('<h2>' + movie.title + '</h2>');
   $('.inner-content').append('<img src="' + movie.posters.thumbnail + '" class="movie-poster"/>');
 });
}

});
