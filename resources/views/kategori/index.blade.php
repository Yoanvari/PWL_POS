@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.btn-edit', function() {
                var route = $(this).data('route');
                // Redirect to the edit page
                window.location.href = route;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Event handler untuk tombol delete
            $('body').on('click', '.btn-delete', function() {
                var route = $(this).data('route');
                // Konfirmasi penghapusan
                if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                    // Kirim permintaan penghapusan ke server
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // Tindakan sukses, misalnya, muat ulang tabel atau tampilkan pesan sukses
                            alert('Kategori berhasil dihapus.');
                            // Misalnya, muat ulang tabel data
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Tindakan jika terjadi kesalahan, misalnya, tampilkan pesan kesalahan
                            alert('Terjadi kesalahan saat menghapus kategori.');
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
@endpush