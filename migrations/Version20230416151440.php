<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230416151440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tag_ambiance_vetement (tag_ambiance_id INT NOT NULL, vetement_id INT NOT NULL, INDEX IDX_6648AA802B692073 (tag_ambiance_id), INDEX IDX_6648AA80969D8B67 (vetement_id), PRIMARY KEY(tag_ambiance_id, vetement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tag_ambiance_vetement ADD CONSTRAINT FK_6648AA802B692073 FOREIGN KEY (tag_ambiance_id) REFERENCES tag_ambiance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_ambiance_vetement ADD CONSTRAINT FK_6648AA80969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tenue DROP FOREIGN KEY FK_EB51486DA76ED395');
        $this->addSql('ALTER TABLE tenue_vetement DROP FOREIGN KEY FK_BC01B54628239C7');
        $this->addSql('ALTER TABLE tenue_vetement DROP FOREIGN KEY FK_BC01B546969D8B67');
        $this->addSql('ALTER TABLE vetement_tag_ambiance DROP FOREIGN KEY FK_E4F937A72B692073');
        $this->addSql('ALTER TABLE vetement_tag_ambiance DROP FOREIGN KEY FK_E4F937A7969D8B67');
        $this->addSql('ALTER TABLE vetement_tag_humeur DROP FOREIGN KEY FK_E351393B2F693A87');
        $this->addSql('ALTER TABLE vetement_tag_humeur DROP FOREIGN KEY FK_E351393B969D8B67');
        $this->addSql('DROP TABLE tenue');
        $this->addSql('DROP TABLE tenue_vetement');
        $this->addSql('DROP TABLE vetement_tag_ambiance');
        $this->addSql('DROP TABLE vetement_tag_humeur');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tenue (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, haut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, bas VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_EB51486DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tenue_vetement (tenue_id INT NOT NULL, vetement_id INT NOT NULL, INDEX IDX_BC01B54628239C7 (tenue_id), INDEX IDX_BC01B546969D8B67 (vetement_id), PRIMARY KEY(tenue_id, vetement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vetement_tag_ambiance (vetement_id INT NOT NULL, tag_ambiance_id INT NOT NULL, INDEX IDX_E4F937A72B692073 (tag_ambiance_id), INDEX IDX_E4F937A7969D8B67 (vetement_id), PRIMARY KEY(vetement_id, tag_ambiance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vetement_tag_humeur (vetement_id INT NOT NULL, tag_humeur_id INT NOT NULL, INDEX IDX_E351393B2F693A87 (tag_humeur_id), INDEX IDX_E351393B969D8B67 (vetement_id), PRIMARY KEY(vetement_id, tag_humeur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tenue ADD CONSTRAINT FK_EB51486DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tenue_vetement ADD CONSTRAINT FK_BC01B54628239C7 FOREIGN KEY (tenue_id) REFERENCES tenue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tenue_vetement ADD CONSTRAINT FK_BC01B546969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_ambiance ADD CONSTRAINT FK_E4F937A72B692073 FOREIGN KEY (tag_ambiance_id) REFERENCES tag_ambiance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_ambiance ADD CONSTRAINT FK_E4F937A7969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_humeur ADD CONSTRAINT FK_E351393B2F693A87 FOREIGN KEY (tag_humeur_id) REFERENCES tag_humeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_tag_humeur ADD CONSTRAINT FK_E351393B969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_ambiance_vetement DROP FOREIGN KEY FK_6648AA802B692073');
        $this->addSql('ALTER TABLE tag_ambiance_vetement DROP FOREIGN KEY FK_6648AA80969D8B67');
        $this->addSql('DROP TABLE tag_ambiance_vetement');
    }
}
