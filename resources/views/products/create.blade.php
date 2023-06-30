@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Produtos</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <h1 class="mb-3">Cadastrar novo Produto</h1>
  <form action="{{ route('products.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="form-floating mb-3">
      <input
        type="text"
        class="form-control"
        id="number"
        name="number"
        placeholder="number"
        required
        autofocus
        pattern="^(?!.*\s)[0-9]+$"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      >
      <label for="number">Número</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="form-floating mb-3">
      <input
        type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="name"
        required
        pattern="^(?!\s*$).+"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      >
      <label for="name">Nome</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="form-floating mb-3">
      <input
        type="text"
        class="form-control"
        id="total_quantity"
        name="total_quantity"
        placeholder="total_quantity"
        required
        pattern="^(?!.*\s)[0-9]+$"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      >
      <label for="total_quantity">Quantidade Total</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="form-floating mb-3">
      <input
        type="text"
        class="form-control"
        id="minimum_quantity"
        name="minimum_quantity"
        placeholder="minimum_quantity"
        required
        pattern="^(?!.*\s)[0-9]+$"
        title="Este campo é Obrigatório. Por favor preencha corretamente."
      >
      <label for="minimum_quantity">Quantidade Mínima</label>
      <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
    </div>
    <div class="form-floating mb-3">
      <select class="form-select" id="category" name="category" aria-label="category">
      @foreach($categories as $category)
        <option value="{{ $category->name }}">{{ $category->name }}</option>
      @endforeach
      </select>
      <label for="category">Categoria</label>
    </div>
    <div class="form-floating mb-3">
      <select class="form-select" id="supplier" name="supplier" aria-label="supplier">
      @foreach($suppliers as $supplier)
        <option value="{{ $supplier->name }}">{{ $supplier->name }}</option>
      @endforeach
      </select>
      <label for="supplier">Fornecedor</label>
    </div>
    <div class="btn-area">
      <a href="/products" type="button" class="btn btn-primary btn-icon">
        <span class="material-symbols-outlined">arrow_back</span>Voltar
      </a>
      <button type="submit" class="btn btn-success btn-icon">
        <span class="material-symbols-outlined">library_add</span>Cadastrar
      </button>
    </div>
  </form>
</div>
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
