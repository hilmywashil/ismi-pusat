@extends('layouts.app')

@section('title', 'Produk ISMI - Ikatan Saudagar Muslim Indonesia Jawa Barat')

<style>
    .products-grids {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 0px 50px 100px 50px;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        width: 100%;
        max-width: 1500px;
        gap: 20px;
    }

    .product-dummy {
        width: 100%;
        border-radius: 20px;
        transition: all 0.3s;
    }

    .product-dummy:hover {
        transform: translateY(-10px);
        cursor: pointer;
    }

    @media (max-width: 1024px) {
        .products-grids {
            padding: 0px 20px 50px 20px;
        }

        .products-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-dummy {
            border-radius: 15px;
        }
    }
</style>

@section('content')
    <section class="page-banners">
        <div class="page-banner">
            <span class="label">Katalog</span>
            <h1>Produk ISMI</h1>
            <p>Katalog Produk ISMI</p>
        </div>
    </section>
    <section class="products-grids">
        <div class="products-grid">
            @forelse ($products as $product)
                <img class="product-dummy" src="{{ asset('storage/' . $product->image) }}">
            @empty
                <img class="product-dummy" src="{{ asset('images/products/ismi-bank.jpg') }}">
            @endforelse
        </div>
    </section>
@endsection