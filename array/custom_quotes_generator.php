<?php
$quotes = array(
    array(
        'author' => 'Ludwig van Beethoven',
        'quote' =>  'Art! Who comprehends her? With whom can one consult concerning
        this great goddess?'
    ),
    array(
        'author' => 'Wolfgang Amadeus Mozart',
        'quote' =>  'Music is the mediator between the spiritual and the'
    ),
    array(
        'author' => 'Nelson Mandela',
        'quote' =>  'The greatest glory in living lies not in never falling, but in rising every time we fall.'
    ),
    array(
        'author' => 'Steve Jobs',
        'quote' =>  "Your time is limited, so don't waste it living someone else's life. Don't"
    ),
    array(
        'author' => 'Albert Einstein',
        'quote' =>  'Strive not to be a success, but rather to be of value.'
    ),
    array(
        'author' => 'Frank Sinatra',
        'quote' =>  'The best revenge is massive success.'
    ),
    array(
        'author' => 'Walt Disney',
        'quote' =>  'The way to get started is to quit talking and begin doing.'
    ),
    array(
        'author' => 'Oscar Wilde',
        'quote' =>  'Be yourself; everyone else is already taken.'
    ),
    array(
        'author' => 'Frank Zappa',
        'quote' =>  'So many books, so little time.'
    ),
    array(
        'author' => 'Eleanor Roosevelt',
        'quote' =>  'If life were predictable it would cease to be life, and be without flavor.'
    ),


);

if (isset($_GET['author']) && isset($_GET['quote'])) {
    $author = $_GET['author'];
    $quote = $_GET['quote'];
    if (isset($_GET['my_quote'])) {
        $new_quote = array(
            'author' => $author,
            'quote' => $quote
        );
        $totalLength = array_push($quotes, $new_quote);
        $random_quotes = $quotes[$totalLength - 1];
    } else {
        $random_indexes = rand(0, count($quotes) - 1);
        $random_quotes = $quotes[$random_indexes];
    }
} else {
    $random_indexes = rand(0, count($quotes) - 1);
    $random_quotes = $quotes[$random_indexes];
}
$author_quotes = $random_quotes['author'];
$quotes_sentences = $random_quotes['quote'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes Generator - Array Assosiative</title>
</head>

<body>
    <h1>Quote of the day !</h1>
    <p>Press f5 or ctrl + R to randomize the quote</p>
    <h4><?= $quotes_sentences;  ?> - <?= $author_quotes; ?> </h4>

    <h3>Add a new quotes</h3>
    <form action="">
        <label for="author">Author name</label>
        <input type="text" name="author" required>
        <br>
        <label for="quote">Inspirational Quote</label>
        <input type="text" name="quote" required>
        <br>
        <label>Show my input quote </label>
        <input type="checkbox" name="my_quote">
        <br>
        <input type="submit">


    </form>
</body>

</html>