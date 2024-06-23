<main role="main" class="container">
  <!-- INICIO ALERTAS -->
  <?php if (isset($_GET['msn_type'])) : ?>
    <div class="row">
      <div class="col mp-3">
        <?php if ($_GET['msn_type'] == 'info') : ?>
          <div class="alert alert-success" role="alert">
            <?= $_GET['msn'] ?>
          </div>
        <?php endif; ?>
        <?php if ($_GET['msn_type'] == 'error') : ?>
          <div class="alert alert-danger" role="alert">
            <?= $_GET['msn'] ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif ?>
  <!-- FIM ALERTAS -->

  <!-- INICIO PESQUISA E NOVO REGISTRO-->
  <div class="row">
    <div class="col mb-3">
      <form method="post" class="row g-3">
        <div class="col-auto">
          <input type="text" id="pesquisar" name="s" class="form-control" placeholder="Pesquisar" value="<?= (isset($_POST['s']) ? $_POST['s'] : '') ?>" required>
        </div>
        <div class="col-auto">
          <button class="btn btn-primary">Pesquisar</button>
          <?php if (isset($_POST['s'])) : ?>
            <a href="<?= $base_url; ?>">Limpar Filtro</a>
          <?php endif; ?>
        </div>
      </form>
    </div>

    <div class="col text-end">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#alphaModal">Novo Registro</button>
    </div>
  </div>
  <!-- FIM PESQUISA E NOVO REGISTRO-->

  <!-- INICIO LISTAGEM -->
  <div class="row">
    <div class="col">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço Unitário</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($listaProdutos) : ?>
            <?php foreach ($listaProdutos as $produto) : ?>
              <tr>
                <th scope="row"><?= $produto['id_produto'] ?></th>
                <td><?= $produto['codigo'] ?></td>
                <td><?= $produto['nome_categoria'] ?></td>
                <td><?= $produto['descricao'] ?></td>
                <td><?= $produto['preco_unitario'] ?></td>
                <td><button class="btn btn-link alterar" data-alterar='<?= json_encode($produto) ?>'>Alterar</button></td>
                <td>
                  <form method="post" class="form-delete" data-id="<?= $produto['id_produto'] ?>">
                    <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">
                    <button type="submit" name="delete" name="delete" class="btn btn-link">Excluir</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>

    </div>
  </div>
  <!-- FIM LISTAGEM -->

</main><!-- /.container -->