@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Produtos</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <h1 class="mb-3">Detalhes do Produto</h1>
  <div class="col mb-4">
    <label class="form-label">Número</label>
    <input type="text" class="form-control" readonly value="{{ $product->number }}">
  </div>
  <div class="col mb-4">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" readonly value="{{ $product->name }}">
  </div>
  <div class="col mb-4">
    <label class="form-label">Fornecedor</label>
    <input type="text" class="form-control" readonly value="{{ $product->supplier }}">
  </div>
  <div class="row">
    <div class="col mb-4">
      <label class="form-label">Categoria</label>
      <input type="text" class="form-control" readonly value="{{ $product->category }}">
    </div>
    <div class="col mb-4">
      <label class="form-label">Status</label>
      <input type="text" class="form-control" readonly value="{{ $product->status }}">
    </div>
  </div>
  <div class="row">
    <div class="col mb-4">
      <label class="form-label">Quantidade Total</label>
      <input type="text" class="form-control" readonly value="{{ $product->total_quantity }}">
    </div>
    <div class="col mb-4">
      <label class="form-label">Quantidade Mínima</label>
      <input type="text" class="form-control" readonly value="{{ $product->minimum_quantity }}">
    </div>
  </div>
  <div class="row">
    <div class="col mb-4">
      <label class="form-label">Data de Criação</label>
      <input type="text" class="form-control" readonly value="{{ $product->created_at }}">
    </div>
    <div class="col mb-4">
      <label class="form-label">Última Modificação</label>
      <input type="text" class="form-control" readonly value="{{ $product->updated_at }}">
    </div>
  </div>
  <br>
  <div class="btn-area">
    <a href="/products" type="button" class="btn btn-primary btn-icon">
      <span class="material-symbols-outlined">arrow_back</span>Voltar
    </a>
  </div>
</div>
@endsection
