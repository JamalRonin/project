<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128102504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE title_service ADD service_id INT NOT NULL');
        $this->addSql('ALTER TABLE title_service ADD CONSTRAINT FK_A3E1A3ABED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_A3E1A3ABED5CA9E6 ON title_service (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE title_service DROP FOREIGN KEY FK_A3E1A3ABED5CA9E6');
        $this->addSql('DROP INDEX IDX_A3E1A3ABED5CA9E6 ON title_service');
        $this->addSql('ALTER TABLE title_service DROP service_id');
    }
}
