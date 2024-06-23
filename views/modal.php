<!-- Modal  Add-->
<div class="modal fade alphaModal" id="alphaModal" tabindex="-1" aria-labelledby="alphaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post">
                <div class="modal-body">
                    <label for="id_categoria">Categoria</label><br>
                    <select name="id_categoria" id="id_categoria" required >
                        <option value="">Selecionar</option>
                        <?php foreach ($listaCategorias as $categoria):?>
                            <option value="<?=$categoria['id_categoria']?>"><?=$categoria['nome_categoria']?></option>
                        <?php endforeach;?>
                    </select>
                    <br>
                    
                    <label for="codigo">Código</label><br>
                    <input type="text" name="codigo" id="codigo" required>
                    <br>
                    
                    <label for="descricao">Descrição</label><br>
                    <input type="text" name="descricao" id="descricao" required>
                    <br>

                    <label for="preco_unitario">Preço Unitário</label><br>
                    <input type="text" name="preco_unitario" id="preco_unitario" class="money" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="add" name="add" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal  Update-->
<div class="modal fade alphaModalUpdate" id="alphaModalUpdate" tabindex="-1" aria-labelledby="alphaModalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post">
                <div class="modal-body">
                    <label for="id_categoria">Categoria</label><br>
                    <select name="id_categoria" id="id_categoria" required >
                        <option value="">Selecionar</option>
                        <?php foreach ($listaCategorias as $categoria):?>
                            <option value="<?=$categoria['id_categoria']?>"><?=$categoria['nome_categoria']?></option>
                        <?php endforeach;?>
                    </select>
                    <br>
                    
                    <label for="codigo">Código</label><br>
                    <input type="text" name="codigo" id="codigo" required>
                    <br>
                    
                    <label for="descricao">Descrição</label><br>
                    <input type="text" name="descricao" id="descricao" required>
                    <br>

                    <label for="preco_unitario">Preço Unitário</label><br>
                    <input type="text" name="preco_unitario" id="preco_unitario" class="money" required>

                    <input type="hidden" name="id_produto" id="id_produto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="update" name="update" class="btn btn-primary">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>