USE netsergi_db_empl;

#modifciar per crear clau primaria
ALTER TABLE t_offices ADD PRIMARY KEY (`OFFC_ID`);


#crear taula Emp_id auto increment
CREATE TABLE `T_EMPLOYEES` (
  `EMPL_ID` INT NOT NULL AUTO_INCREMENT,
  `OFFC_ID` INT NOT NULL,
  `KNLN_ID` INT,
  `EMPL_FORNAME` VARCHAR(50) NOT NULL,
  `EMPL_MIDDLE_NAME` VARCHAR(50),
  `EMPL_SURNAME` VARCHAR(50) NOT NULL,
  `EMPL_NUMBER` INT NOT NULL,
  `EMPL_HIRE_DATE` DATETIME NOT NULL,
  `EMPL_MENTOR_ID` INT,
  PRIMARY KEY (`EMPL_ID`));

#Insertar valor a la taula tenint en compte auto_increment  
INSERT INTO T_EMPLOYEES 
(
	OFFC_ID,
    KNLN_ID,
    EMPL_FORNAME,
    EMPL_SURNAME,
    EMPL_NUMBER,
    EMPL_HIRE_DATE
)
VALUES 
(
	10,
    10,
    'Juan',
    'Perez',
    150,
    '2005/04/15'
);


