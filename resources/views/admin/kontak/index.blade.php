{{-- resources/views/admin/kontak/index.blade.php --}}
@extends('admin.layouts.admin-layout')

@section('title', 'Kelola Pesan')

@section('page-title', 'Kelola Pesan')

@php
$activeMenu = 'kontak';
@endphp

@push('styles')
    <style>
        .stats-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-item {
            background: linear-gradient(135deg, #0a2540 0%, #164e63 100%);
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

        .table-container {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background: #f9fafb;
            padding: 0.875rem;
            text-align: left;
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
            border-bottom: 2px solid #e5e7eb;
        }

        .data-table td {
            padding: 1rem 0.875rem;
            border-bottom: 1px solid #e5e7eb;
            font-size: 0.875rem;
        }

        .data-table tr:hover {
            background: #f9fafb;
        }

        .badge {
            padding: 0.375rem 0.75rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
        }

        .badge-unread {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-read {
            background: #d1fae5;
            color: #065f46;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-view,
        .btn-delete {
            padding: 0.5rem 0.875rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-view {
            background: #dbeafe;
            color: #1e40af;
        }

        .btn-view:hover {
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

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal.show {
            display: block;
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f3f4f6;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0a2540;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #6b7280;
        }

        .close-btn:hover {
            color: #0a2540;
        }

        .modal-body {
            margin-bottom: 1.5rem;
        }

        .message-field {
            margin-bottom: 1rem;
        }

        .message-field label {
            font-weight: 600;
            color: #374151;
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        .message-field p {
            color: #6b7280;
            line-height: 1.6;
            background: #f9fafb;
            padding: 0.75rem;
            border-radius: 6px;
        }

        .alert {
            padding: 1rem 1.25rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }
    </style>
@endpush

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" width="20" height="20">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-label">Total Pesan</div>
            <div class="stat-value">{{ $pesan->count() }}</div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pesan</h3>
        </div>

        <div class="table-container">
            @if($pesan->count() > 0)
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_lengkap }}</td> <!-- Updated -->
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subjek }}</td> <!-- Updated -->
                                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-view" onclick="openModal({{ $index }})">
                                            Lihat
                                        </button>
                                        <form action="{{ route('admin.kontak.delete', $item->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            @else
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" width="64" height="64">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <h3>Belum ada pesan</h3>
                    <p>Semua pesan akan ditampilkan di sini</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal -->
    @foreach($pesan as $index => $item)
        <div id="modal{{ $index }}" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">{{ $item->subjek }}</h2>
                    <button class="close-btn" onclick="closeModal({{ $index }})">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="message-field">
                        <label>Nama Pengirim</label>
                        <p>{{ $item->nama_lengkap }}</p>
                    </div>
                    <div class="message-field">
                        <label>Email</label>
                        <p>{{ $item->email }}</p>
                    </div>
                    <div class="message-field">
                        <label>Pesan</label>
                        <p>{{ $item->message }}</p>
                    </div>
                    <div class="message-field">
                        <label>Tanggal</label>
                        <p>{{ $item->created_at->format('d F Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function openModal(index) {
            document.getElementById('modal' + index).classList.add('show');
        }

        function closeModal(index) {
            document.getElementById('modal' + index).classList.remove('show');
        }

        window.onclick = function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.classList.remove('show');
            }
        }
    </script>
@endsection