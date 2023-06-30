<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form
      action="{{ route('categories.store') }}"
      method="POST"
      id="createModalForm"
      class="needs-validation"
      novalidate
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModalLabel">Cadastrar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="name"
              required
              autofocus
              pattern="^(?!\s*$).+"
              title="Este campo é Obrigatório. Por favor preencha corretamente."
            >
            <label for="name">Nome</label>
            <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-area">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success btn-icon">
              <span class="material-symbols-outlined">library_add</span>Cadastrar
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
