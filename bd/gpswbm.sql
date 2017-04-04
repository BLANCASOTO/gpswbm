create database gpswbm;
	use gpswbm;

	create table tipos_usuarios(
		id_tipo_usuario int(1) not null auto_increment primary key,
		tipo_usuario char(13)
		);

	insert into tipos_usuarios values (1,'Administrador'),(2,'Estandar'),(3,'Invitado');

	create table usuarios(
		id_usuario int(3) not null auto_increment primary key,
		nombre varchar(30),
		email varchar(30),
		contrasena varchar(13),
		fk_tipo_usuarios int(1),
		foreign key (fk_tipo_usuarios) references tipos_usuarios(id_tipo_usuario)
		);

	insert into usuarios(nombre,email,contrasena,fk_tipo_usuarios) values
		('root','root','1234',1),
		('Carmelita Perez','carmelitabonita@gmail.com','TeAmoPedrito',2),
		('Invitado','','',3);

	create table medidas(
		id_medida int(1) not null auto_increment primary key,
		medida char(3)
		);

	insert into medidas(medida) values(1,'met'),(2,'km'),(3,'hrs'),(4,'min'),(5,'seg');

	create table rutas(
		id_rutas int(4) not null auto_increment primary key,
		nombre varchar(20),
		origen_n decimal(6,4),
		origen_s decimal(6,4),
		destino_n decimal(6,4),
		destino_s decimal(6,4),
		avisar_num int(2),
		fk_medida int(1),
		fk_usuario int(3),
		foreign key (fk_usuario) references usuarios(id_usuario),
		foreign key (fk_medida) references medidas(id_medida) 
		);

	insert into rutas(nombre,origen_n,origen_s,destino_n,destino_s,avisar_num,fk_medida,fk_usuario) values
		('casa-escuela',20.2365,30.3265,20.4864,30.5812,70,5,2);

	create table aux_usuarios_rutas(
		id_aur int(4) not null auto_increment primary key,
		fk_usuario int(3),
		fk_rutas int(4),
		foreign key (fk_usuario) references usuarios(id_usuario),
		foreign key (fk_rutas) references rutas(id_rutas)
		);

	insert into aux_usuarios_rutas(fk_usuario,fk_rutas) values (1,1),(2,1);