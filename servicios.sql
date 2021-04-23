create database servicios;
use servicios;

create table administrador(
id int auto_increment,
Nombres varchar(50),
Apellidos varchar(80),
fecha_Nacimiento date,
correo varchar(120),
contraseña varchar(90),
constraint pk_administrador primary key (id)
);

create table cliente(
id int auto_increment,
Nombres varchar(50),
Apellidos varchar(80),
fecha_Nacimiento date,
correo varchar(120),
contraseña varchar(90),
direccion varchar(80),
telefono varchar(9),
sexo char(1),
constraint pk_cliente primary key (id)
);

create table servicio(
id int auto_increment,
nombre_servicio varchar(80),
constraint pk_servicio primary key (id)
);

create table personal(
id int auto_increment,
Nombres varchar(50),
Apellidos varchar(80),
fecha_Nacimiento date,
correo varchar(120),
contraseña varchar(90),
direccion varchar(80),
telefono varchar(9),
sexo char(1),
costoLaboralporHora float,
id_servicio int,
constraint pk_cliente primary key (id),
constraint fk_servicio_personal foreign key (id_servicio) 
references servicio(id)
);

create table detalles_servicio(
id int auto_increment,
descripcion_labor varchar(200),
fecha_servicio date,
id_servicio int,
id_personal int,
id_cliente int,
constraint pk_detalles_servicio primary key (id),
constraint fk_servicio_detalles_servicio foreign key (id_servicio) 
references servicio(id),
constraint fk_personal_detalles_servicio foreign key (id_personal) 
references personal(id),
constraint fk_cliente_detalles_servicio foreign key (id_cliente) 
references cliente(id)
);