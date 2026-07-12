<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260709075331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE section');
        $this->addSql('ALTER TABLE association_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE benin_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE eulogy_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE france_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reports_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE resources_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE team_section ADD html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE training_section ADD html_id VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, html_id VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE association_section DROP html_id');
        $this->addSql('ALTER TABLE benin_section DROP html_id');
        $this->addSql('ALTER TABLE contact_section DROP html_id');
        $this->addSql('ALTER TABLE eulogy_section DROP html_id');
        $this->addSql('ALTER TABLE france_section DROP html_id');
        $this->addSql('ALTER TABLE home_section DROP html_id');
        $this->addSql('ALTER TABLE reports_section DROP html_id');
        $this->addSql('ALTER TABLE resources_section DROP html_id');
        $this->addSql('ALTER TABLE team_section DROP html_id');
        $this->addSql('ALTER TABLE training_section DROP html_id');
    }
}
