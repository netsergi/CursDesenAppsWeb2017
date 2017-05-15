USE `netsergi_db_empl`;

CREATE TABLE `T_DOCUMENTS` (
  `DOCS_ID` INT NOT NULL AUTO_INCREMENT,
  `EMPL_ID` INT NOT NULL,
  `DOCS_NAME` VARCHAR(100) NOT NULL,
  `DOCS_TYPE` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`DOCS_ID`));

ALTER TABLE T_DOCUMENTS ADD INDEX FK_DOCS_EMPL (EMPL_ID), 
    ADD CONSTRAINT FK_DOCS_EMPL 
        FOREIGN KEY (EMPL_ID) REFERENCES T_EMPLOYEES (EMPL_ID);

ALTER TABLE T_DOCUMENTS 
  ADD CONSTRAINT CT_CK_DOCS_TYPE 
  CHECK (DOCS_TYPE IN ('PDF', 'DOC', 'XLS'));
  
INSERT INTO `T_DOCUMENTS`
(`EMPL_ID`, `DOCS_NAME`, `DOCS_TYPE`)
VALUES
(1, 'Titulo', 'PDF'),
(1, 'Curriculum', 'DOC'),
(1, 'Certificado OCP', 'PDF'),
(1, 'Matriz conocimientos', 'XLS'),
(2, 'Grado', 'PDF'),
(2, 'Curriculum', 'DOC'),
(2, 'Certificado MS', 'PDF'),
(3, 'Titulo', 'PDF');

# --------------------------------------------------------------------------  

SELECT CONCAT(E.EMPL_FORNAME,' ',E.EMPL_SURNAME) NOM_COMPLET, COUNT(D.DOCS_ID) NUM_DOCS
FROM T_EMPLOYEES E
INNER JOIN T_DOCUMENTS D
		   ON D.EMPL_ID = E.EMPL_ID
GROUP BY E.EMPL_ID;

# ---------------------------------------------------------------------------

SELECT CONCAT(E.EMPL_FORNAME,' ',E.EMPL_SURNAME) NOM_COMPLET, COUNT(D.DOCS_ID) NUM_DOCS
FROM T_EMPLOYEES E
INNER JOIN T_DOCUMENTS D
		   ON D.EMPL_ID = E.EMPL_ID
GROUP BY E.EMPL_ID
ORDER BY NUM_DOCS ASC;

# ----------------------------------------------------------------------------

SELECT CONCAT(E.EMPL_FORNAME,' ',E.EMPL_SURNAME) NOM_COMPLET, COUNT(D.DOCS_ID) NUM_DOCS
FROM T_EMPLOYEES E
INNER JOIN T_DOCUMENTS D
		   ON D.EMPL_ID = E.EMPL_ID
GROUP BY E.EMPL_ID
ORDER BY NUM_DOCS ASC LIMIT 1,2;

# ----------------------------------------------------------------------------





          
	

