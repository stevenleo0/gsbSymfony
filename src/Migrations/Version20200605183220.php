<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200605183220 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Type_praticien (typ_code VARCHAR(30) NOT NULL, typ_libelle VARCHAR(30) DEFAULT NULL, typ_lieu VARCHAR(30) DEFAULT NULL, PRIMARY KEY(typ_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Visiteur (id INT AUTO_INCREMENT NOT NULL, delegue INT DEFAULT NULL, vis_matricule VARCHAR(3) DEFAULT NULL, vis_nom VARCHAR(30) DEFAULT NULL, vis_prenom VARCHAR(30) DEFAULT NULL, vis_adresse VARCHAR(30) DEFAULT NULL, vis_cp VARCHAR(30) DEFAULT NULL, vis_ville VARCHAR(30) DEFAULT NULL, INDEX fk_delegue (delegue), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Delegue (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) DEFAULT NULL, prenom VARCHAR(30) DEFAULT NULL, adresse VARCHAR(30) DEFAULT NULL, ville VARCHAR(30) DEFAULT NULL, identifiant VARCHAR(30) DEFAULT NULL, mdp VARCHAR(40) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Coef_confiance (coef_num INT AUTO_INCREMENT NOT NULL, coef_libelle VARCHAR(30) DEFAULT NULL, PRIMARY KEY(coef_num)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Rapport_visite (id INT AUTO_INCREMENT NOT NULL, coef_num INT DEFAULT NULL, praticien INT DEFAULT NULL, visiteur INT DEFAULT NULL, rap_bilan VARCHAR(30) DEFAULT NULL, rap_datevisite VARCHAR(30) DEFAULT NULL, rap_daterapport VARCHAR(30) DEFAULT NULL, INDEX fk_coef_num (coef_num), INDEX fk_praticien (praticien), INDEX fk_visiteur (visiteur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Praticien (id INT AUTO_INCREMENT NOT NULL, typ_code VARCHAR(30) DEFAULT NULL, vis_id INT DEFAULT NULL, nom VARCHAR(30) DEFAULT NULL, prenom VARCHAR(30) DEFAULT NULL, adresse VARCHAR(30) DEFAULT NULL, cp VARCHAR(30) DEFAULT NULL, ville VARCHAR(30) DEFAULT NULL, coefNotoriete DOUBLE PRECISION DEFAULT NULL, INDEX fk_typ_code (typ_code), INDEX fk_vis_id (vis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Visiteur ADD CONSTRAINT FK_B7D3E5EEC89E71DD FOREIGN KEY (delegue) REFERENCES Delegue (id)');
        $this->addSql('ALTER TABLE Rapport_visite ADD CONSTRAINT FK_1CB339A9B89F31B1 FOREIGN KEY (coef_num) REFERENCES Coef_confiance (coef_num)');
        $this->addSql('ALTER TABLE Rapport_visite ADD CONSTRAINT FK_1CB339A9D9A27D3 FOREIGN KEY (praticien) REFERENCES Praticien (id)');
        $this->addSql('ALTER TABLE Rapport_visite ADD CONSTRAINT FK_1CB339A94EA587B8 FOREIGN KEY (visiteur) REFERENCES Visiteur (id)');
        $this->addSql('ALTER TABLE Praticien ADD CONSTRAINT FK_8F6BA570D3F86FA4 FOREIGN KEY (typ_code) REFERENCES Type_praticien (typ_code)');
        $this->addSql('ALTER TABLE Praticien ADD CONSTRAINT FK_8F6BA57018114913 FOREIGN KEY (vis_id) REFERENCES Visiteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Praticien DROP FOREIGN KEY FK_8F6BA570D3F86FA4');
        $this->addSql('ALTER TABLE Rapport_visite DROP FOREIGN KEY FK_1CB339A94EA587B8');
        $this->addSql('ALTER TABLE Praticien DROP FOREIGN KEY FK_8F6BA57018114913');
        $this->addSql('ALTER TABLE Visiteur DROP FOREIGN KEY FK_B7D3E5EEC89E71DD');
        $this->addSql('ALTER TABLE Rapport_visite DROP FOREIGN KEY FK_1CB339A9B89F31B1');
        $this->addSql('ALTER TABLE Rapport_visite DROP FOREIGN KEY FK_1CB339A9D9A27D3');
        $this->addSql('DROP TABLE Type_praticien');
        $this->addSql('DROP TABLE Visiteur');
        $this->addSql('DROP TABLE Delegue');
        $this->addSql('DROP TABLE Coef_confiance');
        $this->addSql('DROP TABLE Rapport_visite');
        $this->addSql('DROP TABLE Praticien');
    }
}
