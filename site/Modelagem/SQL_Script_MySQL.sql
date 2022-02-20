
CREATE TABLE clientes (
                cod_cliente INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(50) NOT NULL,
                sobrenome VARCHAR(50) NOT NULL,
                telefone VARCHAR(20) NOT NULL,
                email VARCHAR(50) NOT NULL,
                nascimento DATE NOT NULL,
                observacao VARCHAR(200) NOT NULL,
                ind_ativo INT DEFAULT 1 NOT NULL,
                PRIMARY KEY (cod_cliente)
);


CREATE TABLE profissionais (
                cod_profissionais INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(50) NOT NULL,
                sobrenome VARCHAR(50) NOT NULL,
                telefone VARCHAR(20) NOT NULL,
                email VARCHAR(50) NOT NULL,
                cpf VARCHAR(20) NOT NULL,
                observacoes VARCHAR(200) NOT NULL,
                ind_ativo INT DEFAULT 1 NOT NULL,
                cod_cliente INT NOT NULL,
                PRIMARY KEY (cod_profissionais)
);


CREATE TABLE produtos (
                cod_produto INT AUTO_INCREMENT NOT NULL,
                produto VARCHAR(50) NOT NULL,
                ean VARCHAR(15) NOT NULL,
                valor DECIMAL(2) NOT NULL,
                descricao VARCHAR(100) NOT NULL,
                ind_ativo INT DEFAULT 1 NOT NULL,
                cod_cliente INT NOT NULL,
                cod_profissionais INT NOT NULL,
                PRIMARY KEY (cod_produto)
);


CREATE TABLE servicos (
                cod_servico INT AUTO_INCREMENT NOT NULL,
                valor DECIMAL(2) NOT NULL,
                descricao VARCHAR(100) NOT NULL,
                ind_ativo INT DEFAULT 1 NOT NULL,
                servico VARCHAR(50) NOT NULL,
                duracao VARCHAR(15) NOT NULL,
                cod_cliente INT NOT NULL,
                cod_profissionais INT NOT NULL,
                PRIMARY KEY (cod_servico)
);


ALTER TABLE profissionais ADD CONSTRAINT clientes_profissionais_fk
FOREIGN KEY (cod_cliente)
REFERENCES clientes (cod_cliente)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE servicos ADD CONSTRAINT clientes_servicos_fk
FOREIGN KEY (cod_cliente)
REFERENCES clientes (cod_cliente)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE produtos ADD CONSTRAINT clientes_produtos_fk
FOREIGN KEY (cod_cliente)
REFERENCES clientes (cod_cliente)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE servicos ADD CONSTRAINT profissionais_servicos_fk
FOREIGN KEY (cod_profissionais)
REFERENCES profissionais (cod_profissionais)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE produtos ADD CONSTRAINT profissionais_produtos_fk
FOREIGN KEY (cod_profissionais)
REFERENCES profissionais (cod_profissionais)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
