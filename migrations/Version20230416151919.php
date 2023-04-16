<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230416151919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reference_color ADD h_min INT NOT NULL, ADD h_max INT NOT NULL, ADD s_min INT NOT NULL, ADD s_max INT NOT NULL, ADD l_min INT NOT NULL, ADD l_max INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reference_color DROP h_min, DROP h_max, DROP s_min, DROP s_max, DROP l_min, DROP l_max');
    }
}
