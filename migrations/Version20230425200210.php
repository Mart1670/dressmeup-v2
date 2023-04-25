<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425200210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE palette_tag_humeur (palette_id INT NOT NULL, tag_humeur_id INT NOT NULL, INDEX IDX_625CA31E908BC74 (palette_id), INDEX IDX_625CA31E2F693A87 (tag_humeur_id), PRIMARY KEY(palette_id, tag_humeur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE palette_tag_humeur ADD CONSTRAINT FK_625CA31E908BC74 FOREIGN KEY (palette_id) REFERENCES palette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE palette_tag_humeur ADD CONSTRAINT FK_625CA31E2F693A87 FOREIGN KEY (tag_humeur_id) REFERENCES tag_humeur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE palette_tag_humeur DROP FOREIGN KEY FK_625CA31E908BC74');
        $this->addSql('ALTER TABLE palette_tag_humeur DROP FOREIGN KEY FK_625CA31E2F693A87');
        $this->addSql('DROP TABLE palette_tag_humeur');
    }
}
