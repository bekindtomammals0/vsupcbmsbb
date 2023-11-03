<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific Product</title>
</head>
<body>
    <h1>
        {{$product->title}}
    </h1>
    <p>
        <a href="#">{{$product->category->name}}</a>
    </p>
    <div>
        {!!$product->body;!!}
    </div>
    <a href="/">Go Back</a>
</body>
</html>
