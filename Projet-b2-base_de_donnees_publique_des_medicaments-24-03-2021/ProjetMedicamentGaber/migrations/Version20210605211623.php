<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210605211623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cis_bdpm (codeCIS INT AUTO_INCREMENT NOT NULL, denominationMedicament VARCHAR(500) DEFAULT NULL, formePharmaceutique VARCHAR(500) DEFAULT NULL, voieAdministrative VARCHAR(500) DEFAULT NULL, statutadministratifAMM VARCHAR(500) DEFAULT NULL, typeProcedureAMM VARCHAR(500) DEFAULT NULL, etatCommercialisation VARCHAR(500) DEFAULT NULL, dateAMM DATE DEFAULT NULL, statutBDM VARCHAR(500) DEFAULT NULL, numeroAutorisationEuropeenne VARCHAR(500) DEFAULT NULL, titulaires VARCHAR(500) DEFAULT NULL, surveillanceRenforcée TINYINT(1) DEFAULT NULL, PRIMARY KEY(codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_cip_bdpm (codeCIP7 INT AUTO_INCREMENT NOT NULL, libellePresentation VARCHAR(500) DEFAULT NULL, statutAdministratifPresentation VARCHAR(500) DEFAULT NULL, etatCommercialisationPresentationTelDeclareParTitulaireDeAMM VARCHAR(500) DEFAULT NULL, dateDeclarationCommercialisation DATE DEFAULT NULL, codeCIP13 BIGINT DEFAULT NULL, agrementAuxCollectivites VARCHAR(50) DEFAULT NULL, tauxRemboursement NUMERIC(10, 2) DEFAULT NULL, prixMedicament NUMERIC(20, 2) DEFAULT NULL, indicationsOuvrantDroitRemboursement VARCHAR(2000) DEFAULT NULL, codeCIS INT DEFAULT NULL, INDEX FK_CIS_CIP_bdpm (codeCIS), PRIMARY KEY(codeCIP7)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_compo_bdpm (designationElementPharmaceutique VARCHAR(500) NOT NULL, codeSubstance INT NOT NULL, denominationSubstance VARCHAR(500) DEFAULT NULL, dosageSubstance VARCHAR(500) DEFAULT NULL, referenceDosage VARCHAR(500) DEFAULT NULL, natureComposant VARCHAR(500) DEFAULT NULL, Liaison_FT_SA SMALLINT NOT NULL, codeCIS INT NOT NULL, INDEX IDX_8F5330D01FDF25AE (codeCIS), PRIMARY KEY(designationElementPharmaceutique, codeSubstance, Liaison_FT_SA, codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_cpd_bdpm (conditionPrescription_Delivrance_ VARCHAR(500) NOT NULL, codeCIS INT NOT NULL, INDEX IDX_E6F23A541FDF25AE (codeCIS), PRIMARY KEY(conditionPrescription_Delivrance_, codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_gener_bdpm (idGroupeGenerique INT NOT NULL, LibelleGroupeGenerique VARCHAR(500) DEFAULT NULL, typeGenerique INT NOT NULL, numTri INT DEFAULT NULL, codeCIS INT NOT NULL, INDEX IDX_17B7BFFB1FDF25AE (codeCIS), PRIMARY KEY(idGroupeGenerique, codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_has (valeur VARCHAR(50) NOT NULL, motifEvaluation VARCHAR(500) DEFAULT NULL, dateAvisCimmissionTransparence DATE DEFAULT NULL, libelle VARCHAR(5000) DEFAULT NULL, ASMR_SMR VARCHAR(5) DEFAULT NULL, CodeDossierHAS VARCHAR(50) NOT NULL, codeCIS INT NOT NULL, INDEX codeCIS (codeCIS), INDEX IDX_D6FBB287FE75102B (CodeDossierHAS), PRIMARY KEY(valeur, CodeDossierHAS, codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cis_infoimportantes_aaaammjjhhmiss_bdpm (dateDebutInformationSecurité DATE NOT NULL, dateFinInformationSecurité DATE DEFAULT NULL, titre VARCHAR(500) DEFAULT NULL, href VARCHAR(500) DEFAULT NULL, infoMessage VARCHAR(500) NOT NULL, codeCIS INT NOT NULL, INDEX IDX_7E486D361FDF25AE (codeCIS), PRIMARY KEY(dateDebutInformationSecurité, infoMessage, codeCIS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_lienspagect_bdpm (CodeDossierHAS VARCHAR(50) NOT NULL, LienVersPagesAvisCT_ VARCHAR(500) DEFAULT NULL, PRIMARY KEY(CodeDossierHAS)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cis_cip_bdpm ADD CONSTRAINT FK_8CF3A3C41FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
        $this->addSql('ALTER TABLE cis_compo_bdpm ADD CONSTRAINT FK_8F5330D01FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
        $this->addSql('ALTER TABLE cis_cpd_bdpm ADD CONSTRAINT FK_E6F23A541FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
        $this->addSql('ALTER TABLE cis_gener_bdpm ADD CONSTRAINT FK_17B7BFFB1FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
        $this->addSql('ALTER TABLE cis_has ADD CONSTRAINT FK_D6FBB287FE75102B FOREIGN KEY (CodeDossierHAS) REFERENCES has_lienspagect_bdpm (CodeDossierHAS)');
        $this->addSql('ALTER TABLE cis_has ADD CONSTRAINT FK_D6FBB2871FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
        $this->addSql('ALTER TABLE cis_infoimportantes_aaaammjjhhmiss_bdpm ADD CONSTRAINT FK_7E486D361FDF25AE FOREIGN KEY (codeCIS) REFERENCES cis_bdpm (codeCIS)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cis_cip_bdpm DROP FOREIGN KEY FK_8CF3A3C41FDF25AE');
        $this->addSql('ALTER TABLE cis_compo_bdpm DROP FOREIGN KEY FK_8F5330D01FDF25AE');
        $this->addSql('ALTER TABLE cis_cpd_bdpm DROP FOREIGN KEY FK_E6F23A541FDF25AE');
        $this->addSql('ALTER TABLE cis_gener_bdpm DROP FOREIGN KEY FK_17B7BFFB1FDF25AE');
        $this->addSql('ALTER TABLE cis_has DROP FOREIGN KEY FK_D6FBB2871FDF25AE');
        $this->addSql('ALTER TABLE cis_infoimportantes_aaaammjjhhmiss_bdpm DROP FOREIGN KEY FK_7E486D361FDF25AE');
        $this->addSql('ALTER TABLE cis_has DROP FOREIGN KEY FK_D6FBB287FE75102B');
        $this->addSql('DROP TABLE cis_bdpm');
        $this->addSql('DROP TABLE cis_cip_bdpm');
        $this->addSql('DROP TABLE cis_compo_bdpm');
        $this->addSql('DROP TABLE cis_cpd_bdpm');
        $this->addSql('DROP TABLE cis_gener_bdpm');
        $this->addSql('DROP TABLE cis_has');
        $this->addSql('DROP TABLE cis_infoimportantes_aaaammjjhhmiss_bdpm');
        $this->addSql('DROP TABLE has_lienspagect_bdpm');
    }
}
