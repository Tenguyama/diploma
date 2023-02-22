<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <a href="?language=en">EN</a>
        <a href="?language=uk">UK</a>
        <a href="?language=ru">RU</a>
    </div>
    @foreach($tags as $tag)
        <div>
            <h2>{{$tag->name}}</h2>
        </div>
    @endforeach
</div>

</body>
</html>
