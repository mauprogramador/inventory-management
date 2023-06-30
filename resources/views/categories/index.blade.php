@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
<title>Categorias</title>
@endsection
@section('body')
@include('layouts.navbar')
<div class="container py-5">
  <header class="d-flex align-items-center justify-content-between">
    <div class="header-info">
      <img src="{{ asset('static/images/categories.png') }}" alt="products">
      <h1 class="mb-0">Categorias</h1>
    </div>
    <a class="btn btn-success btn-lg btn-icon" role="button" data-bs-toggle="modal" data-bs-target="#createModal">
      <span class="material-symbols-outlined">library_add</span>
      Cadastrar nova Categoria
    </a>
  </header>
  <div id="alert-area">
  @if(Session::has('success'))
    @if(Session::get('success') == 'CREATE')
    <div class="alert alert-success fade show" role="alert">
        Categoria cadastrada com sucesso!
    </div>
    @endif
    @if(Session::get('success') == 'UPDATE')
    <div class="alert alert-warning fade show" role="alert">
        Categoria alterada com sucesso!
    </div>
    @endif
    @if(Session::get('success') == 'DELETE')
    <div class="alert alert-danger fade show" role="alert">
        Categoria excluída com sucesso!
    </div>
    @endif
  @endif
  </div>
  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @if($categories->count() > 0)
      @foreach($categories as $category)
      <tr>
        <td class="align-middle">{{ $category->id }}</td>
        <td class="align-middle overflow-x-hidden">{{ $category->name }}</td>
        <td class="align-middle">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a
              href="{{ route('categories.show', $category->id) }}"
              type="button"
              class="btn btn-info btn-icon"
              data-bs-toggle="modal"
              data-bs-target="#showModal"
              data-object="{{ $category }}"
              onclick="showModal(this)"
            >
              <span class="material-symbols-outlined">info</span>Detalhes
            </a>
            <a
              href="{{ route('categories.edit', $category->id) }}"
              type="button"
              class="btn btn-warning btn-icon"
              data-bs-toggle="modal"
              data-bs-target="#updateModal"
              data-url="{{ route('categories.update', $category->id) }}"
              data-name="{{ $category->name }}"
              onclick="updateModal(this)"
            >
              <span class="material-symbols-outlined">edit</span>Editar
            </a>
            <button
              type="button"
              class="btn btn-danger btn-icon"
              data-bs-toggle="modal"
              data-bs-target="#deleteModal"
              data-url="{{ route('categories.destroy', $category->id) }}"
              data-name="{{ $category->name }}"
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
        <td class="text-center" colspan="3">Não há Categorias cadastradas!</td>
      </tr>
    @endif
    </tbody>
  </table>
</div>
@include('categories.show_modal')
@include('categories.delete_modal')
@include('categories.create_modal')
@include('categories.update_modal')
<script type="text/javascript" src="{{ asset('static/js/index.js') }}"></script>
@endsection
