CODIGO SQL NECESSARIO PARA CRIAR O BANCO DE DADOS E AS TABELAS 

CREATE DATABASE empresa;
USE DATABASE empresa;

CREATE TABLE pessoas (
cod_pessoa INTEGER NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NULL,
cliEmail VARCHAR(100) NULL,
endereco VARCHAR(100) NULL,
telefona VARCHAR(16)
cliDataNascimento DATE NULL,
PRIMARY KEY(cod_pessoa)
);
