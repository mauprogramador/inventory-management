@extends('layouts.app')
@section('header')
<link rel="shortcut icon" href="{{ asset('static/images/red_newspaper.png') }}" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Produtos</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <header class="d-flex align-items-center justify-content-between">
    <div class="header-info">
      <img src="{{ asset('static/images/products.png') }}" alt="products">
      <h1 class="mb-0">Produtos</h1>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-success btn-lg btn-icon" role="button">
      <span class="material-symbols-outlined">library_add</span>
      Cadastrar novo Produto
    </a>
  </header>
  <div id="alert-area">
  @if(Session::has('success'))
    @if(Session::get('success') == 'CREATE')
    <div class="alert alert-success fade show" role="alert">
        Produto cadastrado com sucesso!
    </div>
    @endif
    @if(Session::get('success') == 'UPDATE')
    <div class="alert alert-warning fade show" role="alert">
        Produto alterado com sucesso!
    </div>
    @endif
    @if(Session::get('success') == 'DELETE')
    <div class="alert alert-danger fade show" role="alert">
        Produto excluído com sucesso!
    </div>
    @endif
  @endif
  </div>
  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Número</th>
        <th scope="col">Nome</th>
        <th scope="col">Status</th>
        <th scope="col">Qtd. Total</th>
        <th scope="col">Qtd. Mínima</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @if($products->count() > 0)
      @foreach($products as $rs)
      <tr>
        <td class="align-middle">{{ $rs->id }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->number }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->name }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->status }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->total_quantity }}</td>
        <td class="align-middle overflow-x-hidden">{{ $rs->minimum_quantity }}</td>
        <td class="align-middle">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-info btn-icon">
              <span class="material-symbols-outlined">info</span>Detalhes
            </a>
            <a href="{{ route('products.edit', $rs->id) }}" type="button" class="btn btn-warning btn-icon">
              <span class="material-symbols-outlined">edit</span>Editar
            </a>
            <button
              type="button"
              class="btn btn-danger btn-icon"
              data-bs-toggle="modal"
              data-bs-target="#deleteModal"
              data-url="{{ route('products.destroy', $rs->id) }}"
              data-name="{{ $rs->name }}"
              onclick="deleteModal(this)"
            >
              <span class="material-symbols-outlined">delete</span>Excluir
            </button>
          </div>
        </td>
      </tr>
      @endforeach
    @else
      <tr>
        <td class="text-center" colspan="7">Não há Produtos cadastrados!</td>
      </tr>
    @endif
    </tbody>
  </table>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="POST" id="deleteModalForm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Excluir Produto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-title">Deseja realmente apagar esse produto?</div>
          <div class="form-floating mb-3">
            <input
                type="text"
                readonly
                class="form-control"
                id="deleteModalName"
                placeholder="name"
                value=""
            >
            <label for="deleteModalName">Nome</label>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-area">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-icon">
              <span class="material-symbols-outlined">delete</span>Excluir
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
