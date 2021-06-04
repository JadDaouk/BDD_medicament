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
   texteA_Afficher_LienVersInformationSecurité VARCHAR(500),
   texteA_Afficher_LienVersInformationSecuritéBis VARCHAR(500),
   CONSTRAINT PK_CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm PRIMARY KEY(codeCIS, dateDebutInformationSecurité, texteA_Afficher_LienVersInformationSecurité, texteA_Afficher_LienVersInformationSecuritéBis),
   CONSTRAINT FK_CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm_codeCIS FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_InfoImportantes_AAAAMMJJhhmiss_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\filenames.csv'
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
---
---
---
---
---
---
CREATE TABLE CIS_CIP_bdpm(
   codeCIS INT NOT NULL,
   codeCIP7 DECIMAL(7,0),
   libellePresentation VARCHAR(500),
   statutAdministratifPresentation VARCHAR(500),
   etatCommercialisationPresentationTelDeclareParTitulaireDeAMM VARCHAR(50),
   dateDeclarationCommercialisation DATE,
   codeCIP13 BIGINT,
   agrementAuxCollectivites VARCHAR(50) CHECK (agrementAuxCollectivites = 'oui' OR agrementAuxCollectivites = 'non' OR agrementAuxCollectivites = 'inconnu'),
   tauxRemboursement INT,
   prixMedicament FLOAT,
   indicationsOuvrantDroitRemboursement VARCHAR(500),
   
   CONSTRAINT PK_CIS_CIP_bdpm PRIMARY KEY(codeCIP7),
   CONSTRAINT FK_CIS_CIP_bdpm FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);
BULK INSERT CIS_CIP_bdpm
    FROM 'C:\Users\victo\Dropbox\B2_epsi\30_projetGaber\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\nouveaux .csv\CIS_CIP_bdpm.csv'
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


