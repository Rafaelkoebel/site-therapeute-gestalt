<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260107145048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE info_pratique (id INT AUTO_INCREMENT NOT NULL, therapeute_id INT DEFAULT NULL, type_info VARCHAR(255) NOT NULL, valeur VARCHAR(255) NOT NULL, ordre INT NOT NULL, INDEX IDX_16C7CCEB74DB83E2 (therapeute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message_contact (id INT AUTO_INCREMENT NOT NULL, therapeute_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, date_envoi DATETIME NOT NULL, INDEX IDX_DCEADC3474DB83E2 (therapeute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE motif_consultation (id INT AUTO_INCREMENT NOT NULL, therapeute_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, ordre INT NOT NULL, INDEX IDX_4E71642D74DB83E2 (therapeute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, therapeute_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, ordre INT NOT NULL, visible TINYINT(1) NOT NULL, INDEX IDX_140AB62074DB83E2 (therapeute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE therapeute (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, presentation LONGTEXT NOT NULL, approche LONGTEXT NOT NULL, cadre_professionnel LONGTEXT NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE info_pratique ADD CONSTRAINT FK_16C7CCEB74DB83E2 FOREIGN KEY (therapeute_id) REFERENCES therapeute (id)');
        $this->addSql('ALTER TABLE message_contact ADD CONSTRAINT FK_DCEADC3474DB83E2 FOREIGN KEY (therapeute_id) REFERENCES therapeute (id)');
        $this->addSql('ALTER TABLE motif_consultation ADD CONSTRAINT FK_4E71642D74DB83E2 FOREIGN KEY (therapeute_id) REFERENCES therapeute (id)');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB62074DB83E2 FOREIGN KEY (therapeute_id) REFERENCES therapeute (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE info_pratique DROP FOREIGN KEY FK_16C7CCEB74DB83E2');
        $this->addSql('ALTER TABLE message_contact DROP FOREIGN KEY FK_DCEADC3474DB83E2');
        $this->addSql('ALTER TABLE motif_consultation DROP FOREIGN KEY FK_4E71642D74DB83E2');
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB62074DB83E2');
        $this->addSql('DROP TABLE info_pratique');
        $this->addSql('DROP TABLE message_contact');
        $this->addSql('DROP TABLE motif_consultation');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE therapeute');
    }
}
