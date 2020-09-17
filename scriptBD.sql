CREATE DATABASE curso_bitcoin;

USE curso_bitcoin;

CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_completo VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE planos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    preco VARCHAR(20) NOT NULL
);

CREATE TABLE aluno(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_completo VARCHAR(100) NOT NULL,
    nome_usuario VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    celular VARCHAR(30) NOT NULL,
    data_nascimento VARCHAR(30) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    numero_casa INT NOT NULL,
    bairro VARCHAR(20) NOT NULL,
    cidade VARCHAR(20) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    id_plano INT NOT NULL,
    CONSTRAINT fk_id_plano FOREIGN KEY (id_plano) REFERENCES planos(id)
);

INSERT INTO planos (titulo, preco) VALUES ('Begin', '300');
INSERT INTO planos (titulo, preco) VALUES ('Advance', '500');
INSERT INTO planos (titulo, preco) VALUES ('Plus', '1.000');
INSERT INTO planos (titulo, preco) VALUES ('Mega', '3.000');
INSERT INTO planos (titulo, preco) VALUES ('Top', '7.000');
INSERT INTO planos (titulo, preco) VALUES ('Premiere', '10.000');
INSERT INTO planos (titulo, preco) VALUES ('Premium', '15.000');
INSERT INTO planos (titulo, preco) VALUES ('Hiper', '25.000');
INSERT INTO planos (titulo, preco) VALUES ('Rocket', '35.000');
INSERT INTO planos (titulo, preco) VALUES ('Universe', '50.000');


 -- usuario aluno para testes
INSERT INTO aluno (nome_completo, nome_usuario, email, senha, celular, data_nascimento, 
    endereco, bairro, cidade, estado, numero_casa, cpf, id_plano) VALUES
    ('joão teste', 'teste123', 'teste@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 
    '(11) 12345 6789', '08/11/1997', 'rua 07', 'centro', 'caxias', 'maranhao', 12, 
    '123.456.789-12', 1);

-- usuario root para teste
INSERT INTO `usuario`(`nome_completo`, `email`, `senha`) VALUES
    ('savio root','root@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220')
