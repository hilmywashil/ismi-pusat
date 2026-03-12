@extends('admin.layouts.admin-layout')

@section('title', 'Kelola Product')
@section('page-title', 'Kelola Product')

@php
    $activeMenu = 'product';
@endphp

@push('styles')
    <style>
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-item {
            background-color: #015931;
            padding: 1.5rem;
            border-radius: 8px;
            color: white;
        }

        .stat-label {
            font-size: 0.875rem;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
        }

        .content-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f3f4f6;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0a2540;
        }

        .btn-add {
            background: #0a2540;
            color: white;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .btn-add:hover {
            background: #164e63;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
        }

        .product-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #f3f4f6;
        }

        .product-body {
            padding: 1rem;
            flex: 1;
        }

        .product-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #0a2540;
        }

        .product-description {
            font-size: 0.875rem;
            color: #6b7280;
            line-height: 1.4;
            margin-bottom: 1rem;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            padding: 0 1rem 1rem;
            gap: 0.5rem;
        }

        .btn-edit,
        .btn-delete {
            flex: 1;
            padding: 0.5rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-edit {
            background: #dbeafe;
            color: #1e40af;
        }

        .btn-edit:hover {
            background: #bfdbfe;
        }

        .btn-delete {
            background: #fee2e2;
            color: #991b1b;
        }

        .btn-delete:hover {
            background: #fecaca;
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #6b7280;
        }
    </style>
@endpush

@section('content')

    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-label">Total Product</div>
            <div class="stat-value">{{ $products->count() }}</div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <h3 class="card-title">Daftar Product</h3>
            <a href="{{ route('admin.products.create') }}" class="btn-add">
                + Tambah Product
            </a>
        </div>

        @if($products->count() > 0)
            <div class="products-grid">
                @foreach($products as $product)
                    <div class="product-card">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="product-image">
                        @endif

                        <div class="product-body">
                            <div class="product-title">
                                {{ $product->product_name }}
                            </div>
                            <div class="product-description">
                                {{ Str::limit($product->description, 80) }}
                            </div>
                        </div>

                        <div class="product-actions">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus product ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <h3>Belum ada product</h3>
                <p>Silakan tambahkan product baru</p>
            </div>
        @endif
    </div>

@endsection