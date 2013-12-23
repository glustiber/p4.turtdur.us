<h2>Write a Review</h2>

<form method='POST' action='/reviews/p_add/<?=$movie_id?>'>

	<label for='rating'>Rating: </label><input type='text' name='rating' id='rating' required></input><br><br>
	<div class='clear'></div>
    <label for='content'>Write review:</label><br>
    <textarea name='content' id='content' required></textarea>

    <br><br>
    <input type='submit' value='Submit Review'>

</form>