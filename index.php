<?php

$quotes = [
	[
		'author' =>'Dr. Seuss',
		'text' =>'Do not cry because it is over, smile because it happened.' 
	],
	[
		'author' =>'Albert Einstein',
		'text' =>'Two things are infinite: the universe and human stupidity, and I am not sure about the universe.' 

	],
	[
		'author' =>'Marcus Tullius Cicero',
		'text' =>'A room without books is like a body without a soul.'

	],
	[
		'author' =>'Mahatma Gandhi',
		'text' =>'Be the change that you wish to see in the world.'

	],
	[
		'author' =>'Mahatma Gandhi',
		'text' =>'Live as if you were to die tomorrow. Learn as if you were to live forever.'

	],

];

$quote = $quotes[array_rand($quotes)];//The array_rand() function returns a random key's index number from an array. This is a better solution than to generate random numbers. Than we use this random number as an index number to get a key-value pair from the array.

/*
//the rand() is an OK solution and it works!
$quote = $quotes[rand(0,count($quotes)-1)];//first we need a variable that will hold the random quote that we pull out from the array. We are generating a random number 0-4. 4 is defined with this: count($quotes)-1). Now this is an array, so we can't echo this.
*/

$quoteText = $quote['text'];//$quote containt a key-value par from the array. Now we need to extract the the quote text from the array. Which is 'text'.

$quoteAuthor = $quote['author'];//$quote containt a key-value par from the array. Now we need to extract the the quote author from the array. Which is 'author'.

//the blockquote html element is just used to format quotes.

?>

<!DOCTYPE html>
<html>
<head>
	<title>Random quote generator</title>
</head>
<body>

<h4>Random quote generator</h4>

	<blockquote>
		<h2><?php echo '"' . $quoteText . '"' . '<br>';  ?></h2>
		<strong>- <?php echo  $quoteAuthor ;  ?> </strong>
		
	</blockquote>



</body>
</html>