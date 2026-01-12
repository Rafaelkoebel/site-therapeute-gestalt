<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260112171614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE info_pratique ADD lieu VARCHAR(255) NOT NULL, ADD duree VARCHAR(100) NOT NULL, ADD tarif NUMERIC(6, 2) NOT NULL, ADD rythme VARCHAR(100) NOT NULL, ADD modalites_paiement VARCHAR(255) NOT NULL, ADD cadre_annulation LONGTEXT NOT NULL, DROP type_info, DROP valeur, DROP ordre');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE info_pratique ADD type_info VARCHAR(255) NOT NULL, ADD valeur VARCHAR(255) NOT NULL, ADD ordre INT NOT NULL, DROP lieu, DROP duree, DROP tarif, DROP rythme, DROP modalites_paiement, DROP cadre_annulation');
    }
}
