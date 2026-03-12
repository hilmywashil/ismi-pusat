@extends('admin.layouts.admin-layout')

@section('title', 'Tambah Product')
@section('page-title', 'Tambah Product')

@php
$activeMenu = 'product';
@endphp

@push('styles')
    <style>
        .form-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .form-label.required::after {
            content: '*';
            color: #dc2626;
            margin-left: 0.25rem;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.875rem;
            font-family: 'Montserrat', sans-serif;
            transition: all 0.2s;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #0a2540;
            box-shadow: 0 0 0 3px rgba(10, 37, 64, 0.1);
        }

        .form-input.error,
        .form-textarea.error {
            border-color: #dc2626;
        }

        .error-message {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.375rem;
        }

        .file-input-wrapper {
            position: relative;
            width: 100%;
        }

        .file-input {
            display: none;
        }

        .file-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
            background: #f9fafb;
            text-align: center;
        }

        .file-label:hover {
            border-color: #0a2540;
            background: #f3f4f6;
        }

        .file-icon {
            width: 48px;
            height: 48px;
            margin-bottom: 1rem;
            color: #6b7280;
        }

        .image-preview {
            margin-top: 1rem;
            text-align: center;
        }

        .preview-img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            border: 2px solid #e5e7eb;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 2px solid #f3f4f6;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-primary {
            background: #0a2540;
            color: white;
        }

        .btn-primary:hover {
            background: #164e63;
        }

        .btn-secondary {
            background: #f3f4f6;
            color: #374151;
        }

        .btn-secondary:hover {
            background: #e5e7eb;
        }

        .form-helper {
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: 0.375rem;
        }
    </style>
@endpush

@section('content')
    <div class="form-card">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nama Product --}}
            <div class="form-group">
                <label for="product_name" class="form-label required">Nama Product</label>
                <input type="text" id="product_name" name="product_name"
                    class="form-input @error('product_name') error @enderror" value="{{ old('product_name') }}"
                    placeholder="Masukkan nama product">
                @error('product_name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div class="form-group">
                <label for="description" class="form-label required">Deskripsi</label>
                <textarea id="description" name="description" rows="4"
                    class="form-textarea @error('description') error @enderror"
                    placeholder="Masukkan deskripsi product">{{ old('description') }}</textarea>
                @error('description')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Gambar --}}
            <div class="form-group">
                <label class="form-label required">Gambar Product</label>

                <div class="file-input-wrapper">
                    <input type="file" id="image" name="image" class="file-input" accept="image/*"
                        onchange="previewImage(event)">

                    <label for="image" class="file-label">
                        <div>
                            <svg class="file-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <div style="font-weight: 600;">Klik untuk upload gambar</div>
                            <div style="font-size: 0.75rem; color: #6b7280;">JPG, PNG, WEBP (Max. 2MB)</div>
                        </div>
                    </label>
                </div>

                <div id="imagePreview" class="image-preview" style="display:none;">
                    <img id="preview" class="preview-img" src="" alt="Preview">
                </div>

                @error('image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    Simpan Product
                </button>

                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush