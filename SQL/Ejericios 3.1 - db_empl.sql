use netsergi_db_empl;

#EXERCIÇI 3.1 DIAPOSITIVAS --------------------------------------

#INSERIR VALORS A LA TAULA T_OFFICES

INSERT INTO t_offices VALUES 
(
 10,'España','Madrid','Oficina central'
);

INSERT INTO t_offices VALUES 
(
 11,'España','Barcelona',null
);

INSERT INTO t_offices VALUES 
(
 20,'Chile','Santiago','Oficina principal de Chile'
),
( 
 30,'Argentina','Buenos Aires',null
);

#SELECT DE OFFC_ID, OFFC_COUNTRY, OFFC_CITY  ON DESCRIPTION CONTINGUI LA PARAULA 'OFICINA'                              

SELECT OFFC_ID, OFFC_COUNTRY, OFFC_CITY FROM t_offices WHERE OFFC_DESCRIPTION LIKE 'Oficina%';

UPDATE t_offices SET OFFC_CITY = 'Buenos Aires' WHERE OFFC_ID = 30;

DESC t_offices;

#CREAR TAULA T_KNOWLEDGE_LINES

CREATE TABLE `T_KNOWLEDGE_LINES` (
  `KNLN_ID` INT(11) NOT NULL,
  `KNLN_NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`KNLN_ID`)
);

#INSERIR DADES EN LA TAULA CREADA

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (10, 'Java'),
	   (20, '.NET'),
       (30, 'Mainframe');
       


