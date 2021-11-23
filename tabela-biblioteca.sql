CREATE DATABASE biblioteca_crud;

CREATE TABLE biblioteca (
  id_biblioteca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_biblioteca VARCHAR(100) NOT NULL,
  end_biblioteca VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_biblioteca)
);
  
CREATE TABLE aluno (
  id_aluno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_aluno VARCHAR(100) NOT NULL,
  end_aluno VARCHAR(100) NOT NULL,
  email_aluno VARCHAR(100) NOT NULL,
  fone_aluno VARCHAR(25) NOT NULL,
  data_nasc_aluno DATE NULL,
  genero_aluno VARCHAR(25) NULL DEFAULT 'Não quis informar',
  PRIMARY KEY (id_aluno)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_categoria)
);

CREATE TABLE atendente (
  id_atendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  biblioteca_id_biblioteca INTEGER UNSIGNED NOT NULL,
  nome_atendente VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_atendente),
  INDEX fk_id_biblioteca (biblioteca_id_biblioteca)
);

CREATE TABLE livro (
  id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(100) NOT NULL,
  autor_livro VARCHAR(100) NOT NULL,
  editora_livro VARCHAR(100) NULL,
  edicao_livro CHAR(8) NULL,
  ano_livro YEAR NULL,
  localidade_livro VARCHAR(100) NULL,
  isbn_livro BIGINT NULL,
  PRIMARY KEY (id_livro),
  INDEX fk_categoria_id(categoria_id_categoria)
);
    
CREATE TABLE reserva (
  id_reserva INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  aluno_id_aluno INTEGER UNSIGNED NOT NULL,
  livro_id_livro INTEGER UNSIGNED NOT NULL,
  atendente_id_atendente INTEGER UNSIGNED NOT NULL,
  emprestimo DATE NOT NULL,
  devolucao DATE NOT NULL,
  PRIMARY KEY (id_reserva),
  INDEX fk_id_livro(livro_id_livro),
  INDEX fk_id_aluno(aluno_id_aluno),
  INDEX fk_id_atendente(atendente_id_atendente)
);
  

