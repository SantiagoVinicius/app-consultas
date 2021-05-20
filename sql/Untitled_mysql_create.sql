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

