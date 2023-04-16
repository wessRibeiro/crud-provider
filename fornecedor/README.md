# considerações: 
- Removi adicionei a lib mysqli (mysql foi descontinuada à muito tempo)  

# respostas:
Com base nas informações abaixo, complete a classe Fornecedor:
1) Insira uma linha na base de dados da tabela “fornecedor”. Conforme os dados abaixo:
   Id=1; nome=”Kalunga”; telefone=1138052000; estado=”SP”; cidade=“Osasco”

```` php
$provider = new Fornecedor();
$provider->inserirFornecedor(1, "Kalunga", 1138052000, "SP", "Osasco");
$provider->mostrarFornecedor();
````
2) Mostre a consulta em linguagem SQL, da tabela “fornecedor”.(Mostre somente os dados da tabela)

```` sql
-- instrução sql para consultar a tabela  
SELECT 
   *
FROM
   fornecedor   
````

SQL da Tabela Fornecedor:
```` sql    
    CREATE TABLE `fornecedor` (
    `id` int unsigned NOT NULL auto_increment,
    `nome` varchar(50) NOT NULL,
    `telefone` varchar(11),
    `estado` char(2),
    `cidade` varchar(50),
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1
````
