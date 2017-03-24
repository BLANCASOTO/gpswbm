create database examen;
	use examen;

create table productos(
id_producto int(4) not null auto_increment primary key,
nombre varchar(15),
descripcion varchar(35),
existencias int(3),
precio_compra decimal(6,2),
precio_venta decimal(6,2)
);

insert into productos(nombre,descripcion,existencias,precio_compra,precio_venta) values("tacos","comida",100,6.00,7.00);