CREATE DATABASE BDPM; 

USE BDPM;

CREATE TABLE CIS_bdpm(
   codeCIS INT,
   denominationMedicament VARCHAR(500),
   formePharmaceutique VARCHAR(500),
   voieAdministrative VARCHAR(500),
   statutadministratifAMM VARCHAR(500),
   typeProcedureAMM VARCHAR(500),
   etatCommercialisation VARCHAR(500),
   dateAMM DATE,
   statutBDM VARCHAR(500),
   numeroAutorisationEuropeenne VARCHAR(500),
   titulaires VARCHAR(500),
   surveillanceRenforcée BIT,
   Constraint PK_codeCIS PRIMARY KEY(codeCIS)
);

BULK INSERT CIS_bdpm
    FROM ''
    WITH
    (
	CODEPAGE = '65001', --demander explication
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);


CREATE TABLE CIS_CPD_bdpm(
   codeCIS INT,
   conditionPrescription_Delivrance_ VARCHAR(500),
   Constraint PK_CIS_CPD_bdpm PRIMARY KEY(codeCIS, conditionPrescription_Delivrance_),
   FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);


BULK INSERT CIS_CPD_bdpm
    FROM ''
    WITH
    (
	CODEPAGE = '65001', --demander explication
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);




CREATE TABLE CIS_COMPO_bdpm(
   codeCIS INT,
   designationElementPharmaceutique VARCHAR(500),
   codeSubstance INT,
   denominationSubstance VARCHAR(500),
   dosageSubstance VARCHAR(500),
   referenceDosage VARCHAR(500),
   natureComposant VARCHAR(500) Check (natureComposant='FT' OR natureComposant= 'SA'),
   Liaison_FT_SA SMALLINT,
   CONSTRAINT PK_CIS_COMPO_bdpm PRIMARY KEY(codeCIS, codeSubstance, Liaison_FT_SA, designationElementPharmaceutique),
   CONSTRAINT FK_CIS_COMPO_bdpm_CIS_bdpm FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_COMPO_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\CIS_COMPO_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001', --demander explication
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);


CREATE TABLE CIS_GENER_bdpm(
    idGroupeGenerique INT,
    LibelleGroupeGenerique VARCHAR(500),
    codeCIS INT,
   
   
   typeGenerique INT NOT NULL check (typeGenerique = 0 OR typeGenerique = 1 OR typeGenerique =2 OR typeGenerique =4),
   numTri INT,
   CONSTRAINT PK_CIS_GENER_bdpm PRIMARY KEY(codeCIS, idGroupeGenerique),
   CONSTRAINT FK_CIS_GENER_bdpm_CIS_bdpm FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_GENER_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\CIS_GENER_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001', --demander explication
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);



CREATE TABLE CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm(
   codeCIS INT,
   dateDebutInformationSecurité DATE,
   dateFinInformationSecurité DATE,
   titre VARCHAR(500),
   href VARCHAR(500),
   infoMessage VARCHAR(500),
   CONSTRAINT PK_CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm PRIMARY KEY(codeCIS, dateDebutInformationSecurité, infoMessage),
   CONSTRAINT FK_CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm_codeCIS FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\nouveaux .csv\CIS_InfoImportantes_2021.csv'
    WITH
    (
	CODEPAGE = '65001', --utf8
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);


CREATE TABLE HAS_LiensPageCT_bdpm(
   CodeDossierHAS VARCHAR(50),
   LienVersPagesAvisCT_ VARCHAR(500),
   CONSTRAINT PK_HAS_LiensPageCT_bdpm PRIMARY KEY(CodeDossierHAS)
);
BULK INSERT HAS_LiensPageCT_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\HAS_LiensPageCT_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001', --utf8
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);



CREATE TABLE CIS_HAS(
   codeCIS INT,
   CodeDossierHAS VARCHAR(50),
   motifEvaluation VARCHAR(500),
   dateAvisCimmissionTransparence DATE,
   valeur VARCHAR(50),
   libelle VARCHAR(5000),
   ASMR_SMR VARCHAR(5) CHECK( ASMR_SMR = 'ASMR' OR ASMR_SMR ='SMR'),
   PRIMARY KEY(CodeDossierHAS, codeCIS, valeur),
   FOREIGN KEY(CodeDossierHAS) REFERENCES HAS_LiensPageCT_bdpm(CodeDossierHAS),
   FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_HAS
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\CIS_HAS_ASMR_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001', --utf8
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);

---BUG CSV TOO MANY DATA---
---CVS corrected 
--
CREATE TABLE CIS_CIP_bdpm(
   codeCIS INT NOT NULL,
   codeCIP7 INT,
   libellePresentation VARCHAR(500),
   statutAdministratifPresentation VARCHAR(500),
   etatCommercialisationPresentationTelDeclareParTitulaireDeAMM VARCHAR(500),
   dateDeclarationCommercialisation DATE,
   codeCIP13 BIGINT,
   agrementAuxCollectivites VARCHAR(50),
   tauxRemboursement DECIMAL(10,2),
   prixMedicament DECIMAL(20,2),
   indicationsOuvrantDroitRemboursement VARCHAR(2000),
   
   CONSTRAINT PK_CIS_CIP_bdpm PRIMARY KEY(codeCIP7),
   CONSTRAINT FK_CIS_CIP_bdpm FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_CIP_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\CIS_CIP_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001', --demander explication
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);


