GRANT ALL PRIVILEGES ON provider.* TO 'root'@'%' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON provider.* TO 'root'@'localhost' IDENTIFIED BY 'root';
USE provider;
CREATE TABLE `fornecedor` (
      `id` int unsigned NOT NULL auto_increment,
      `nome` varchar(50) NOT NULL,
      `telefone` int,
      `estado` char(2),
      `cidade` varchar(50),
      PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1