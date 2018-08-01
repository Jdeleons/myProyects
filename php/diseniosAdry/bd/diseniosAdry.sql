CREATE DATABASE diseniosadry;
USE diseniosadry;

CREATE TABLE usuarios(
    id_usuario int AUTO_INCREMENT,
    nombre varchar(100),
    apellido varchar(100),
    email varchar(50),
    pass text(50),
    fechaCaptura date,
        PRIMARY KEY(id_usuario)
);

CREATE TABLE categorias (
    id_categoria int AUTO_INCREMENT,
    id_usuario int NOT null,
	nombreCategoria varchar(150),
    fechaCaptura date,
    	PRIMARY KEY(id_categoria)
);

CREATE TABLE imagenes(
	id_imagen int AUTO_INCREMENT,
    id_categoria int NOT NULL,
    nombre varchar(500),
    ruta varchar(500),
    fechaCaptura date,
    	PRIMARY KEY(id_imagen)
);

CREATE TABLE productos (
	id_producto int AUTO_INCREMENT,
    id_categoria int NOT NULL,
    id_imagen int NOT NULL,
    id_usuario int NOT NULL,
    nombre varchar(100),
    descripcion varchar(500),
    cantidad int,
    precio float,
    fechaCaptura date,
    	PRIMARY KEY(id_producto)
);

CREATE TABLE clientes (
	id_cliente int AUTO_INCREMENT,
    id_usuario int NOT NULL,
    nombre varchar(200),
    apellido varchar(200),
    direccion varchar(200),
    email varchar(200),
    telefono int(8),
    nit varchar(9),
    	PRIMARY KEY(id_cliente)
);

CREATE TABLE ventas (
	id_venta int AUTO_INCREMENT,
    id_cliente int NOT NULL,
    id_producto int NOT NULL,
    id_usuario int NOT NULL,
    precio float,
    fechaVenta date,
    	PRIMARY KEY(id_venta)
);
