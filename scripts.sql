/*
DROP TABLE produto;
DROP TABLE pedido;
*/

-- a) tabela pedido
CREATE TABLE pedido(
numeroPedido SERIAL,
valorTotal numeric(8,2) not null,
dataPedido date not null,
status varchar(25) not null,
primary key(numeroPedido)
);

-- b) tabela produto
CREATE TABLE produto(
idProduto SERIAL,
valorProduto numeric(8,2) not null,
numeroPedido integer not null,
primary key(idProduto),
foreign key(numeroPedido) references pedido(numeroPedido)
);

-- c) Insert, inserindo um pedido com 3 produtos

INSERT INTO pedido (valorTotal, dataPedido, status) VALUES 
(120.00, '2024-08-10', 'PAGO');
-- select * from pedido

INSERT INTO produto (valorProduto, numeroPedido) VALUES 
(50, 1),
(50, 1), 
(20, 1);
-- select * from produto

-- d) Execute um update alterando 1 produto do pedido e o valor.
UPDATE produto set valorProduto=10 where idProduto=3;
UPDATE pedido set valorTotal=110 where numeroPedido=1;

-- e) Select pegando apenas os seguintes campos “numeroPedido”, “idProduto” e “dataPedido”.
SELECT pedido.numeroPedido, idProduto, dataPedido from pedido join produto on pedido.numeroPedido=produto.numeroPedido;

-- f) Execute um delete no pedido, removendo apenas 2 produtos.
DELETE FROM produto USING pedido WHERE idProduto in (2, 3);