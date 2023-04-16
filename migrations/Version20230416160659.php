<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230416160659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vetement_tag_ambiance (vetement_id INT NOT NULL, tag_ambiance_id INT NOT NULL, INDEX IDX_E4F937A7969D8B67 (vetement_id), INDEX IDX_E4F937A72B692073 (tag_ambiance_id), PRIMARY KEY(vetement_id, tag_ambiance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vetement_tag_ambiance ADD CONSTRAINT FK_E4F937A7969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_ambiance ADD CONSTRAINT FK_E4F937A72B692073 FOREIGN KEY (tag_ambiance_id) REFERENCES tag_ambiance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_ambiance_vetement DROP FOREIGN KEY FK_6648AA802B692073');
        $this->addSql('ALTER TABLE tag_ambiance_vetement DROP FOREIGN KEY FK_6648AA80969D8B67');
        $this->addSql('DROP TABLE tag_ambiance_vetement');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tag_ambiance_vetement (tag_ambiance_id INT NOT NULL, vetement_id INT NOT NULL, INDEX IDX_6648AA802B692073 (tag_ambiance_id), INDEX IDX_6648AA80969D8B67 (vetement_id), PRIMARY KEY(tag_ambiance_id, vetement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tag_ambiance_vetement ADD CONSTRAINT FK_6648AA802B692073 FOREIGN KEY (tag_ambiance_id) REFERENCES tag_ambiance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_ambiance_vetement ADD CONSTRAINT FK_6648AA80969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_ambiance DROP FOREIGN KEY FK_E4F937A7969D8B67');
        $this->addSql('ALTER TABLE vetement_tag_ambiance DROP FOREIGN KEY FK_E4F937A72B692073');
        $this->addSql('DROP TABLE vetement_tag_ambiance');
    }
}
