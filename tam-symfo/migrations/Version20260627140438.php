<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260627140438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY `FK_AABDD999BD94E74`');
        $this->addSql('DROP INDEX UNIQ_AABDD999BD94E74 ON carousel_image');
        $this->addSql('ALTER TABLE carousel_image CHANGE gallery_id_id gallery_image_id INT NOT NULL');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD99828F7D6 FOREIGN KEY (gallery_image_id) REFERENCES gallery_image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AABDD99828F7D6 ON carousel_image (gallery_image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD99828F7D6');
        $this->addSql('DROP INDEX UNIQ_AABDD99828F7D6 ON carousel_image');
        $this->addSql('ALTER TABLE carousel_image CHANGE gallery_image_id gallery_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT `FK_AABDD999BD94E74` FOREIGN KEY (gallery_id_id) REFERENCES gallery_image (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AABDD999BD94E74 ON carousel_image (gallery_id_id)');
    }
}
