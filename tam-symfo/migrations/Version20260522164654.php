<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260522164654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE association_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE benin_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE eulogy_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE france_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE team_section CHANGE aside aside LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE training_section CHANGE aside aside LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE association_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE benin_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE contact_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE eulogy_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE france_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE home_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE team_section CHANGE aside aside LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE training_section CHANGE aside aside LONGTEXT NOT NULL');
    }
}
