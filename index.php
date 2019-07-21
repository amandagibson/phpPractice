<?php

// PHP comments are not visible in page source
// Create an array with a list of articles
$articles = [ "First Post", "Another Post", "Read This!" ]; /* example of multiple lined comment */

foreach ($articles as $article) {
    echo $article, ", ";
}