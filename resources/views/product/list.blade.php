<h1>Halaman product</h1>
<h2>category : {{ $category }}</h2>
<h3>Daftar Product</h3>
<ol>
    @foreach ($products as $item)
        <li>{{ $item }}</li>
    @endforeach
