use BDPM;
CREATE TABLE CIS_bdpm(
   codeCIS INT,
   denominationMedicament VARCHAR(500),
   formePharmaceutique VARCHAR(500),
   voieAdministrative VARCHAR(1000),
   statutadministratifAMM VARCHAR(500),
   typeProcedureAMM VARCHAR(50),
   etatCommercialisation VARCHAR(50),
   dateAMM DATE,
   statutBDM VARCHAR(500),
   numeroAutorisationEuropeenne VARCHAR(500),
   titulaires VARCHAR(500),
   surveillanceRenforcée TINYINT,
   PRIMARY KEY(codeCIS)
);

BULK INSERT CIS_bdpm
    FROM 'C:\Users\jfhag\Documents\GitHub\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\CIS_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001',
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
    );

CREATE TABLE CIS_CIP_bdpm(
   codeCIS INT NOT NULL,
   codeCIP7 DECIMAL(8,0),
   libellePresentation VARCHAR(500),
   statutAdministratifPresentation VARCHAR(500),
   etatCommercialisationPresentationTelDeclareParTitulaireDeAMM VARCHAR(500),
   dateDeclarationCommercialisation DATE,
   codeCIP13 FLOAT,
   agrementAuxCollectivites VARCHAR(50),
   tauxRemboursement VARCHAR(10),
   prixMedicament FLOAT,
   indicationsOuvrantDroitRemboursement VARCHAR(5000) DEFAULT NULL,
   PRIMARY KEY(codeCIP7),
   FOREIGN KEY(codeCIS) REFERENCES CIS_bdpm(codeCIS)
);

ALTER TABLE CIS_CIP_bdpm ADD CONSTRAINT CK_CIS_CIP_bdpm CHECK (agrementAuxCollectivites IN ('oui', 'non', 'inconnu'));

BULK INSERT CIS_CIP_bdpm
    FROM 'C:\Users\jfhag\Documents\GitHub\BDD_medicament\Projet-b2-base_de_donnees_publique_des_medicaments-24-03-2021\.csv\CIS_CIP_bdpm.csv'
    WITH
    (
	CODEPAGE = '65001',
	FORMAT = 'CSV', 
    FIELDQUOTE = '"',
    FIRSTROW = 1,
    FIELDTERMINATOR = ';',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
    );