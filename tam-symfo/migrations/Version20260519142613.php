<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260519142613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rubric_info ADD gallery_image_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE rubric_info ADD CONSTRAINT FK_8189E95E828F7D6 FOREIGN KEY (gallery_image_id) REFERENCES gallery_image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8189E95E828F7D6 ON rubric_info (gallery_image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rubric_info DROP FOREIGN KEY FK_8189E95E828F7D6');
        $this->addSql('DROP INDEX UNIQ_8189E95E828F7D6 ON rubric_info');
        $this->addSql('ALTER TABLE rubric_info ADD image VARCHAR(255) DEFAULT NULL, DROP gallery_image_id');
    }
}
