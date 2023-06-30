<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form
      action=""
      method="POST"
      id="updateModalForm"
      class="needs-validation"
      novalidate
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModalLabel">Alterar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          @method('PUT')
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="updateModalName"
              name="name"
              placeholder="name"
              required
              autofocus
              pattern="^(?!\s*$).+"
              title="Este campo é Obrigatório. Por favor preencha corretamente."
            >
            <label for="updateModalName">Nome</label>
            <div class="invalid-feedback">Este campo é Obrigatório. Por favor preencha corretamente.</div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-area">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-warning btn-icon">
              <span class="material-symbols-outlined">edit</span>Alterar
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
