@extends('layouts.template')
@section('content')
<div class="container">
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($itemslide as $index => $slide )
          @if($index == 0)
          <div class="carousel-item active">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @else
          <div class="carousel-item">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @endif
          @endforeach          
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Merk Elektronik</h2>
    </div>
    @foreach($itemkategori as $kategori)
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}">
          @if($kategori->foto != null)
          <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
          @else
          <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none">
            <p class="card-text">{{ $kategori->nama_kategori }}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end kategori produk -->
  <!-- produk Promo-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Diskon Elektronik</h2>
    </div>
    @foreach($itempromo as $promo)
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}">
          @if($promo->produk->foto != null)
          <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @else
          <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none">
            <p class="card-text">
              {{ $promo->produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                <br />
                Rp. {{ number_format($promo->harga_akhir, 2) }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end produk promo -->
  <!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Elektronik Terbaru</h2>
    </div>
    @foreach($itemproduk as $produk)
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          @if($produk->foto != null)
          <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
          @else
          <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
            <p class="card-text">
              {{ $produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. {{ number_format($produk->harga, 2) }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end produk terbaru -->

  <!-- tentang toko -->
  <hr>
  <div class="row mt-4">
    <div class="col">
      <h5 class="text-center">Toko Di Jogjatronik</h5>
      <p>
      Jogjatronik adalah pusat perbelanjaan khusus elektronik terbesar di Yogyakarta yang terletak di kawasan Gondomanan. Jogjatronik juga merupakan satu-satunya mal yang khusus menjual barang elektronik di Yogyakarta
      </p>
      <p class="text-center">
        <a href="" class="btn btn-outline-secondary">
          Baca Selengkapnya
        </a>      
      </p>
    </div>
  </div>
  <!-- end tentang toko -->

</div>
@endsection