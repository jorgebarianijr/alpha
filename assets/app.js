$(document).ready(function () {
    $('.btn.alterar').click(function () {//captura o click na listagem de alterar
        let data = $(this).attr('data-alterar'); //recupera os dados para popular o modal de alterar
        openModal(JSON.parse(data)); //abre o modal
    });

    $('.form-delete').submit(function(){ //lógicas para submit no form de excluir da listagem
        if(confirm('Deseja realmente excluir?')){
            return true;
        }else{
            return false;
        }   
    });

    $('.money').mask("##0.00", {reverse: true}); // formata campo de preco
});

function openModal(data) { // função que abre o modal para alteração de produtos
    var myModalEl = document.getElementById('alphaModalUpdate')
    var myModal = new bootstrap.Modal(document.getElementById('alphaModalUpdate'));
    myModalEl.addEventListener('shown.bs.modal', function (event) {
        populaCampos(data);
    });
    myModal.show();
}

function populaCampos(obj) { // função que popula o modal depois de aberto
    let valIdCategoria = obj.id_categoria;
    let valIdProduto = obj.id_produto;
    let valCodigo = obj.codigo;
    let valDescricao = obj.descricao;
    let valPrecoUnitario = obj.preco_unitario;

    $('.alphaModalUpdate #id_produto').val(valIdProduto);
    $('.alphaModalUpdate #codigo').val(valCodigo);
    $('.alphaModalUpdate #descricao').val(valDescricao);
    $('.alphaModalUpdate #preco_unitario').val(valPrecoUnitario);
    $('.alphaModalUpdate #id_categoria>option[value="' + valIdCategoria + '"]').prop('selected', true);
}