<x-layout>
    @include ('_products-header')'

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-featured-product-card/>

        <div class="lg:grid lg:grid-cols-2">
            <x-product-card/>
            <x-product-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-product-card/>
            <x-product-card/>
            <x-product-card/>
        </div>
    </main>

    {{-- <h2>You are now in Products Page</h2>
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
    @endforeach --}}
</x-layout>
