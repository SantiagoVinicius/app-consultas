# app-consultas
## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clínica médica. O sistema terá os módulos de:
 - Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - opção de pesquisar o paciente por qualquer parte do nome
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em um agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap
---
## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;
```
### Criação da tabela médicos
```sql
CREATE TABLE `bd_consultorio`.`TB_MEDICOS` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```
### Criação da tabela pacientes 
``` sql
INSERT INTO `tb_pacientes` (`id`, `nome`, `telefone`, `data_nascimento`, `convenio`, `diagnostico`) VALUES (NULL, 'Laís Moura', '(14)55266-9008', '1999-01-02', 'Não', 'Não Sabe');

### Criação da tabela agenda


CREATE TABLE `tb_pacientes` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(100) NOT NULL,
	`telefone` varchar(20) NOT NULL,
	`data_nascimento` DATE NOT NULL,
	`convenio` varchar(3) NOT NULL,
	`diagnostico` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tb_medicos` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(100) NOT NULL,
	`telefone` varchar(20) NOT NULL,
	`crm` varchar(50) NOT NULL,
	`especialidade` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tb_agenda` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`data` DATE NOT NULL,
	`hora` TIME NOT NULL,
	`id_medico` INT NOT NULL,
	`sala` varchar(20) NOT NULL,
	`id_paciente` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `tb_agenda` ADD CONSTRAINT `tb_agenda_fk0` FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos`(`id`);

ALTER TABLE `tb_agenda` ADD CONSTRAINT `tb_agenda_fk1` FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes`(`id`);

