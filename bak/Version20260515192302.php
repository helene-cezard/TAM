<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260515192302 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel_image (id INT AUTO_INCREMENT NOT NULL, position INT NOT NULL, gallery_id_id INT NOT NULL, UNIQUE INDEX UNIQ_AABDD999BD94E74 (gallery_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD999BD94E74 FOREIGN KEY (gallery_id_id) REFERENCES gallery_image (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD999BD94E74');
        $this->addSql('DROP TABLE carousel_image');
    }
}
