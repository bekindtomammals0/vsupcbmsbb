@extends('layout')
@section('content')
    <h2>You are now in Products Page</h2>
    @foreach($products as $product)
        {{-- @dd($loop) --}}
        <article class="{{$loop->odd?'tae':''}}">
            <a href="/products/{{$product->slug}}">
                <h1>
                {{$product->title;}}
                </h1>
            </a>

            <p>
                <a href="#">{{$product->category->name}}</a>
            </p>

            <div>
                {!! $product->excerpt; !!}
            </div>
        </article>
    @endforeach
@endsection

