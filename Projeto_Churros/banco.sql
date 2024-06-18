create database churros;

use churros;

create table clientes(
    id int (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome varchar (85),
    cpf varchar (11),
    data_nasc date,
    email varchar (255),
    senha varchar (255),
    tel_celular varchar (20),
    cep varchar (10),
    rua_avenida varchar (255),
    bairro varchar (255),
    numero varchar (6),
    complemento varchar (85),
    sexo varchar (1)
);