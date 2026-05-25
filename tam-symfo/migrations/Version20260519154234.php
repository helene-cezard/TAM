<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260519154234 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE association_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE benin_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE contact_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE eulogy_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE france_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE home_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE team_section ADD `left` TINYINT NOT NULL');
        $this->addSql('ALTER TABLE training_section ADD `left` TINYINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action DROP `left`');
        $this->addSql('ALTER TABLE association_section DROP `left`');
        $this->addSql('ALTER TABLE benin_section DROP `left`');
        $this->addSql('ALTER TABLE contact_section DROP `left`');
        $this->addSql('ALTER TABLE eulogy_section DROP `left`');
        $this->addSql('ALTER TABLE france_section DROP `left`');
        $this->addSql('ALTER TABLE home_section DROP `left`');
        $this->addSql('ALTER TABLE team_section DROP `left`');
        $this->addSql('ALTER TABLE training_section DROP `left`');
    }
}
