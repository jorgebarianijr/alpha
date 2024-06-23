<br>
<h1>Instalação Banco de dados</h1>
<p>Atenção, antes é necessário criar o banco e depois adcionar as credenciais no arquivo config.php.</p>
<br><br>
<form method="post">
    <button type="submit" name="install" id="install">Instalar DB</button>
</form>

<?php

use Alpha\Models\DbAlpha;

require_once 'vendor/autoload.php';
require_once 'config.php';

if (isset($_POST['install'])) {
    $conn = DbAlpha::conectaDB();
    try {

        $sql = "CREATE TABLE IF NOT EXISTS `ap_categoria` (
            `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
            `nome_categoria` varchar(300) NOT NULL,
            PRIMARY KEY (`id_categoria`)
            ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

            DELETE FROM `ap_categoria`;

            INSERT INTO `ap_categoria` (`id_categoria`, `nome_categoria`) VALUES
                (1, 'Categoria 1'),
                (2, 'Categoria 2'),
                (3, 'Categoria 3'),
                (4, 'Categoria 4');
            
            CREATE TABLE IF NOT EXISTS `ap_produto` (
            `id_produto` int(11) NOT NULL AUTO_INCREMENT,
            `id_categoria` int(11) NOT NULL,
            `codigo` varchar(100) NOT NULL,
            `descricao` varchar(300) NOT NULL,
            `preco_unitario` decimal(10,2) NOT NULL,
            PRIMARY KEY (`id_produto`),
            UNIQUE KEY `descricao_UNIQUE` (`descricao`),
            KEY `ap_produto_id_categoria_idx` (`id_categoria`),
            CONSTRAINT `ap_produto_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `ap_categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
            ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        $conn->exec($sql);
        echo "Instalação Concluída com sucesso";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
