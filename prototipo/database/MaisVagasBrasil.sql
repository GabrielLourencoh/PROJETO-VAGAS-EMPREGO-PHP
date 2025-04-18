CREATE DATABASE maisvagasbrasil;
USE maisvagasbrasil;

CREATE TABLE usuarios (
	id int auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    profissao varchar(100) not null, 
    senha varchar(50) not null, 
    primary key (id)
);

CREATE TABLE vagas (
    id int auto_increment,
    nome_vaga varchar(255) not null unique,
    primary key (id)
);
ALTER TABLE vagas
ADD CONSTRAINT unique_nome UNIQUE (nome_vaga);
ALTER TABLE vagas
DROP COLUMN descricao;

insert into vagas (nome_vaga) values ('analista_dados_junior');
insert into vagas (nome_vaga) values ('analista_dados_senior');
insert into vagas (nome_vaga) values ('cientista_dados_pleno');
insert into vagas (nome_vaga) values ('cientista_dados_senior');
insert into vagas (nome_vaga) values ('desenvolvedor_full_stack_junior');
insert into vagas (nome_vaga) values ('desenvolvedor_junior_back_end');
insert into vagas (nome_vaga) values ('desenvolvedor_pleno');
insert into vagas (nome_vaga) values ('estagiario_desenvolvimento_web');
insert into vagas (nome_vaga) values ('engenheiro_software_senior');
insert into vagas (nome_vaga) values ('estagiario_cientista_dados');
insert into vagas (nome_vaga) values ('estagiario_analise_dados');
insert into vagas (nome_vaga) values ('estagiario_engenharia_software');


CREATE TABLE vagas_inscricoes (
    id INT AUTO_INCREMENT,
    nome_vaga VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    descricao TEXT,
    primary key (id)
);
ALTER TABLE vagas_inscricoes
DROP INDEX unique_nome;


select * from usuarios;
select * from vagas;
select * from vagas_inscricoes;

-- adicionando permissao para delete no banco de dados 
SET SQL_SAFE_UPDATES = 0;

DELETE FROM usuarios;
DELETE FROM vagas_inscricoes;
DELETE FROM vagas;