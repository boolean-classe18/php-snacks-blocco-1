<?php

// PHP Snack 3
// Creare un array di array.
// Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati a quella data.
// Stampare ogni data con i relativi post.

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 3</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Lista dei post
                    </h1>
                    <?php
                    // ciclo tutti i post
                    // N.B.: sono raggruppati per data!
                    foreach ($posts as $date => $date_posts) { ?>
                        <h2><?php echo $date ?></h2>
                        <div class="posts clearfix">
                            <?php
                            // ciclo tutti i post di una specifica data
                            foreach ($date_posts as $post) { ?>
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $post['title']; ?>
                                        </h5>
                                        <p class="card-text">
                                            <?php echo $post['text'] ?>
                                        </p>
                                        <em>
                                            <?php echo $post['author'] ?>
                                        </em>
                                    </div><!-- .card-body -->
                                </div><!-- .card -->
                                <?php
                            } // chiudo foreach interno
                            ?>
                        </div><!-- .posts.clearfix -->
                        <?php
                    } // chiudo foreach esterno
                    ?>
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </body>
</html>
