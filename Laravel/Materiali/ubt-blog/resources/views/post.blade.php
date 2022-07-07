<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBT blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div id="page" class="site-page">
    <h1>UBT Blog</h1>
    <div id="content" class="site-content">
        <article class="post">
            <header class="entry-header">
                <h2>{{ $entry->title }}</h2>
            </header>
            <div class="entry-content">
                {!! $entry->body !!}
            </div>
        </article>
        <p><a href="/">Go back</a></p>
    </div>
</div>
</body>
</html>
