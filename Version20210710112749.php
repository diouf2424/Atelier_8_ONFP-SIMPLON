<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210710112749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chauffeur (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, age INT NOT NULL, telephone INT NOT NULL, identifiant VARCHAR(255) NOT NULL, adressemail VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, permis TINYINT(1) NOT NULL, cni INT NOT NULL, notetotale INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, chauffeur_id INT DEFAULT NULL, matricule VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, assurance TINYINT(1) NOT NULL, visitetechnique TINYINT(1) NOT NULL, cartegrise TINYINT(1) NOT NULL, pneudesecours TINYINT(1) NOT NULL, materieldesecours TINYINT(1) NOT NULL, INDEX IDX_E9E2810F85C0B3BE (chauffeur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F85C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES chauffeur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F85C0B3BE');
        $this->addSql('DROP TABLE chauffeur');
        $this->addSql('DROP TABLE voiture');
    }
}
