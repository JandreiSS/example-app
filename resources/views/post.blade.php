<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(["resources/css/app.css"])
        <title>Trend Mobile</title>
    </head>
    <body>
        <article>
            <h1><?= $post->title; ?></h1>

            <div>
                <?= $post->body; ?>
            </div>
        </article>
        <a href="/">Go Back</a>
    </body>
</html>
