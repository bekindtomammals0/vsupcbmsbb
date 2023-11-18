@extends('layout')
@section('content')
    <h2>You are now in Products Page</h2>
    @foreach($products as $product)
        <article class="{{$loop->odd?'tae':''}}">
            <a href="/products/{{$product->slug}}">
                <h1>
                {{$product->title;}}
                </h1>
            </a>

            <p>
                Category: <a href="/categories/{{$product->category->slug}}">{{$product->category->name}}</a>
                <br><br>
                Added by <a href="/stores/{{$product->store->username}}"> {{$product->store->name}}</a>
            </p>

            <div>
                {!! $product->excerpt; !!}
            </div>
        </article>
    @endforeach
@endsection

