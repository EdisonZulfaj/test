<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT blog</title>
</head>

<body>
    <div id="page" class="site-page">
        <h1>UBT Blog</h1>
        <div id="content" class="site-content">
           
            <article class="post">

                <header class="entry-header">
                    <h2>{{$entry['title']}} </a></h2>
                </header>
                <div class="entry-content">
                    {{$entry['body']}}
                </div>
            </article>

           <p><a href="/">Go Back</a></p>


        </div>
    </div>
</body>

</html>