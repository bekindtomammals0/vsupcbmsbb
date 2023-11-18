<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific Product</title>
</head>
<body>
    <article>
        <h1>
            {{$product->title}}
        </h1>
        <p>
            Category: <a href="/categories/{{$product->category->slug}}">{{$product->category->name}}</a>
            <br><br>
            Added by <a href="/stores/{{$product->store->username}}"> {{$product->store->name}}</a>
        </p>
        <div>
            {!!$product->body;!!}
        </div>
    </article>
    <a href="/">Go Back</a>
</body>
</html>
