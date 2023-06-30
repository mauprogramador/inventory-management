<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="POST" id="showModalForm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="showModalLabel">Detalhes da Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col mb-4">
            <label class="form-label">Id</label>
            <input type="text" readonly class="form-control" id="showModalId">
          </div>
          <div class="col mb-4">
            <label class="form-label">Nome</label>
            <input type="text" readonly class="form-control" id="showModalName">
          </div>
          <div class="col mb-4">
            <label class="form-label">Data de Criação</label>
            <input type="text" readonly class="form-control" id="showModalCreatedAt">
          </div>
          <div class="col mb-4">
            <label class="form-label">Última Modificação</label>
            <input type="text" readonly class="form-control" id="showModalUpdatedAt">
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-area">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
