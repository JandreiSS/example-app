<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(["resources/css/app.css"])
        <title>Trend Mobile</title>
    </head>
    <body>
        <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <div><?= $post->excerpt; ?></div>
        </article>
        <?php endforeach; ?>
    </body>
</html>
