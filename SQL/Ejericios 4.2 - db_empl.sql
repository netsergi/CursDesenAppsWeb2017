use netsergi_db_empl;

# US DE RELACIONS -------------------------------

# INSERIR AMB CLAU FORANEA-------------------

INSERT INTO T_EMPLOYEES
(
	OFFC_ID,
    KNLN_ID,
    EMPL_FORNAME,
    EMPL_SURNAME,
    EMPL_NUMBER,
    EMPL_HIRE_DATE,
    EMPL_MENTOR_ID
)
VALUES
(
	11,
    20,
    'Luis',
    'Gonzalez',
    160,
    '2006/05/18',
    1
);
    
# INSERIR VALORS SENSE DADES AL ID FORANI----    
INSERT INTO T_EMPLOYEES
(
	OFFC_ID,
    KNLN_ID,
    EMPL_FORNAME,
    EMPL_SURNAME,
    EMPL_NUMBER,
    EMPL_HIRE_DATE,
    EMPL_MENTOR_ID
)
VALUES
(
	20,
    NULL,
    'Pedro',
    'Garcia',
    180,
    '2006/05/18',
    NULL
);