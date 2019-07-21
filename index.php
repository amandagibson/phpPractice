<?php

$articles = [
    [
        "title" => "It was all a dream!",
        "content" => "I used to read Word Up! magazine."
    ],
    [
        "title" => "Birthdays was the worst days.",
        "content" => "Now we sip champagne when we thirsty!"
    ],
    [
        "title" => "You know very well who you are!",
        "content" => "Don't let them hold you down."
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My Blog</h1>
    </header>

    <main>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <article>
                        <h2><?= $article['title']; ?></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
