<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260713043943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE action CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE association_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE benin_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE eulogy_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE france_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE reports_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE resources_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE team_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE training_section CHANGE html_id html_id VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `user`');
        $this->addSql('ALTER TABLE action CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE association_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE benin_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE eulogy_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE france_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reports_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE resources_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE team_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE training_section CHANGE html_id html_id VARCHAR(255) DEFAULT NULL');
    }
}
