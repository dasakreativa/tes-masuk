<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<body>

    <div class="container">
        <div class="row my-3">
            @foreach ($products as $produk)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $produk->image }}" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h3>{{ $produk->nama_produk }}</h3>
                        <p><span>{{ $produk->created_at->format('l, j F Y H:i:s') }}</span></p>
                        <p>Kategori <span class="badge bg-primary">{{ $produk->getCategory()->first()->cat_name }}</span></p>
                        <p>{{ $produk->getDetail()->first()->deskripsi_produk }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
