CREATE SEQUENCE public.areas_id_seq INCREMENT BY 1 START 1;
CREATE SEQUENCE public.empleados_id_seq INCREMENT BY 1 START 1;
CREATE SEQUENCE public.roles_id_seq INCREMENT BY 1 START 1;

/* tabla areas */
CREATE TABLE public.areas
(
	idarea INTEGER DEFAULT nextval('areas_id_seq'::regclass) NOT NULL,
	nombre VARCHAR(255) NULL,
	estado BOOLEAN 
) WITHOUT OIDS;

/* Add Primary Key areas */
ALTER TABLE public.areas ADD CONSTRAINT areas_pkey
	PRIMARY KEY (idarea);
	
	
	/* tabla empleados */
CREATE TABLE public.empleados
(
	idempleado INTEGER DEFAULT nextval('empleados_id_seq'::regclass) NOT NULL,
	nombre VARCHAR(255) NULL,
	email VARCHAR(255) NULL,
	sexo CHAR(1) NULL,
	area_id INTEGER NULL,
	BOLETIN INTEGER NULL,
	descripcion VARCHAR(255) NULL,
	estado BOOLEAN 
) WITHOUT OIDS;

/* Add Primary Key empleados */
ALTER TABLE public.empleados ADD CONSTRAINT empleados_pkey
	PRIMARY KEY (idempleado);
	
	
	/* tabla roles */
CREATE TABLE public.roles
(
	idrol INTEGER DEFAULT nextval('roles_id_seq'::regclass) NOT NULL,
	nombre VARCHAR(255) NULL,
	estado BOOLEAN 
) WITHOUT OIDS;

/* Add Primary Key roles */
ALTER TABLE public.roles ADD CONSTRAINT roles_pkey
	PRIMARY KEY (idrol);
	
	CREATE TABLE public.empleado_rol
(
	empleado_id INTEGER ,
	rol_id INTEGER 
) WITHOUT OIDS;

	ALTER TABLE public.empleado_rol ADD CONSTRAINT fk_empleado_empleados
	FOREIGN KEY (empleado_id) REFERENCES public.empleados (idempleado)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
	
		ALTER TABLE public.empleado_rol ADD CONSTRAINT fk_empleado_rol
	FOREIGN KEY (rol_id) REFERENCES public.roles (idrol)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
	
		
		ALTER TABLE public.empleados ADD CONSTRAINT fk_empleado_area
	FOREIGN KEY (area_id) REFERENCES public.areas (idarea)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
	
			ALTER TABLE public.empleados ADD CONSTRAINT fk_empleado_area
	FOREIGN KEY (area_id) REFERENCES public.areas (idarea)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
	
	
	INSERT INTO public.areas(
	 nombre, estado)
	VALUES ( 'contabilidad', true);

INSERT INTO public.empleados(
	 nombre, email, sexo, area_id, boletin, descripcion, estado)
	VALUES ( 'guiovanny caro', 'guiovanny.caro@outlook.com','M', 1, 1, 'descripcion somera', true);
	
	
	INSERT INTO public.roles(
	 nombre, estado)
	VALUES ( 'administrador', true);
	
	INSERT INTO public.empleado_rol(
	 empleado_id, rol_id)
	VALUES ( 1, 1);
	
		

