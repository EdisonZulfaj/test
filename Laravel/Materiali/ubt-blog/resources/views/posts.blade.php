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
<div id="page" class="site-page my-8 mx-16">
    <h1 class="text-4xl text-gray-600">UBT Blog</h1>
    <div id="content" class="site-content my-8">
        @foreach($entries as $entry)
            <article class="post my-8">
                <header class="entry-header">
                    <h2 class="text-xl font-semibold mb-4"><a href="/posts/{{ $entry->slug }}">{{ $entry->title }}</a></h2>
                </header>
                <div class="entry-content">
                    {!! $entry->body !!}
                </div>
            </article>
        @endforeach
    </div>
</div>
</body>
</html>
