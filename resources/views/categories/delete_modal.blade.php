<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="POST" id="deleteModalForm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Excluir Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-title">Deseja realmente apagar essa categoria?</div>
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
