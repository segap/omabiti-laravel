@extends('admin.layouts.app')

@section('title', 'Data Produk')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header text-start bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">DATA PRODUK</h5>
        <!-- Tombol Tambah Data -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">
            + Tambah Produk
        </button>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light text-center">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th style="width: 100px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($products as $index => $item)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>

                    <td class="text-center">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" width="100">
                        @else
                            -
                        @endif
                    </td>

                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->jenis_produk }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->stok }}</td>

                    <td class="text-center">
                        <!-- Edit -->
                        <button class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEditProduk{{ $item->id }}">
                            <i class="bx bx-edit"></i>
                        </button>

                        <!-- Delete -->
                        <form action="{{ route('produk.destroy', $item->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="bx bx-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ========================================================= -->
<!--                  MODAL TAMBAH PRODUK                     -->
<!-- ========================================================= -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body">

                <!-- GAMBAR -->
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <!-- NAMA PRODUK -->
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>

                <!-- JENIS PRODUK -->
                <div class="mb-3">
                    <label class="form-label">Jenis Produk</label>
                    <select name="jenis_produk" class="form-select" required>
                        <option value="">-- Pilih Jenis Produk --</option>
                        <option value="roti">Roti</option>
                        <option value="kue_basah">Kue Basah</option>
                        <option value="kue_kering">Kue Kering</option>
                    </select>
                </div>

                <!-- HARGA -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <!-- STOK -->
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>

@foreach ($products as $item)
<div class="modal fade" id="modalEditProduk{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('produk.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body">

                <!-- GAMBAR -->
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">

                    <!-- preview gambar lama -->
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" width="80" class="mt-2">
                    @endif
                </div>

                <!-- NAMA -->
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control"
                           value="{{ $item->nama_produk }}" required>
                </div>

                <!-- JENIS -->
                <div class="mb-3">
                    <label class="form-label">Jenis Produk</label>
                    <select name="jenis_produk" class="form-select" required>
                        <option value="Roti" {{ $item->jenis_produk == 'roti' ? 'selected' : '' }}>Roti</option>
                        <option value="Kue Basah" {{ $item->jenis_produk == 'kue_basah' ? 'selected' : '' }}>Kue Basah</option>
                        <option value="Kue Kering" {{ $item->jenis_produk == 'kue_kering' ? 'selected' : '' }}>Kue Kering</option>
                    </select>
                </div>

                <!-- HARGA -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control"
                           value="{{ $item->harga }}" required>
                </div>

                <!-- STOK -->
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control"
                           value="{{ $item->stok }}" required>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>
</div>
@endforeach
@endsection