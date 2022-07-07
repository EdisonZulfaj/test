<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div id="page" class="site-page my-8 mx-16">
        <h1 class="text-4xl text-gray-600">UBT Blog</h1>
        <div id="content" class="site-content my-8">
            @foreach($entry as $entry)


            <article class="post my-8">

                <header class="entry-header">
                    <h2 class="text-xl font-semibold md-4"><a href="/posts/{{ $loop->index + 1}}">{{$entry['title']}} </a></h2>
                </header>
                <div class="entry-content">
                    {{$entry['body']}}
                </div>
            </article>

            @endforeach


        </div>
    </div>
</body>

</html>