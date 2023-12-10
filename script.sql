DROP TABLE IF EXISTS viagens;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios
(
    id SERIAL NOT NULL PRIMARY KEY,
    usuario varchar(50) NOT NULL UNIQUE,
    senha varchar(512) NOT NULL
);

INSERT INTO usuarios VALUES(1,'admin', md5('12345'));

CREATE TABLE viagens(
	id SERIAL NOT NULL,
	nome VARCHAR(64) NOT NULL,
	descricao VARCHAR(512),
	caminho_imagem VARCHAR(1024),
	id_usuario INT NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
)

