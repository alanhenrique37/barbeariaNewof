create database neguinhocorts;
use neguinhocorts;
 
create table agendamento(
	nome varchar(150) not null,
    servico varchar(300) not null,
    unidade varchar(150) not null,
    barbeiro varchar(150) not null,
    diaehora datetime not null,
    pagamento varchar(150) not null
)Engine = InnoDB;
select * from agendamento;
create table loginFuncionario(
	email varchar(150)not null,
    senha varchar(150)not null
    )Engine = InnoDB;
    select * from loginFuncionario;
    
    
	create table usuarios (
    id int auto_increment primary key,
    nome varchar(45) not null,
    senha varchar(130) not null,
    email varchar(110) not null,
    telefone varchar (15) not null,
    sexo varchar(15) not null,
    data_nasc DATE not null,
    cidade VARCHAR(45)not null,
    estado VARCHAR(45) not null,
    endereco VARCHAR(45) not null
)engine=InnoDB;
select * from usuarios;
 