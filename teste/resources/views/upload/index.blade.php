<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Lista Imagens</h1>
    <ul>
        @foreach($imagens as $image)
        <li><img src="{{URL::to('storage/'. $image->path)}}" alt=""></li>
        @endforeach
    </ul>
</body>
</html>