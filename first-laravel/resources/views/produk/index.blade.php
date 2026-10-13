@extends('layouts.app')
@section('title', 'Daftar Produk')

@section('content')
  <h1>Daftar Produk</h1>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Aksi</th>
    </tr>
    @forelse ($id as $i)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $i['nama'] }}</td>
        <td>Rp {{ number_format($i['harga'], 0, ',', '.') }}</td>
        <td>
          @if ($i['stok'] > 10) Aman
          @elseif ($i['stok'] > 0) Menipis
          @else Habis
          @endif
        </td>
        <td><a href="{{ route('produk.show', $i['id']) }}">Detail</a></td>
      </tr>
    @empty
      <tr>
        <td colspan="5">Belum ada produk.</td>
      </tr>
    @endforelse
  </table>
@endsection

@push('scripts')
  <script>console.log('produk dimuat');</script>
@endpush