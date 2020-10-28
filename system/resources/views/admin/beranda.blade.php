@extends('template.base')
@section ('content')
 <div class="jumbotron">
  <h1 class="display-4">Selamat datang di BANGSAT.id</h1>
  <p class="lead">Marketplace Terpercaya Untuk Anda! Menyediakan Berbagai Macam Barang dan Produk dari berbagai Toko dan Jasa dari Berbagai Sumber.</p>
  <hr class="my-4">
  <p>BANGSAT.id Merupakan Marketplace Terpercaya, Khususnya Bagi Masyarakat Ketapang.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Mulai Belanja</a>
</div>
 @endsection