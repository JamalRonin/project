<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128133118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE choose_use_service (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, class VARCHAR(255) NOT NULL, img VARCHAR(50) NOT NULL, alt VARCHAR(100) NOT NULL, titleh3 VARCHAR(100) NOT NULL, text LONGTEXT NOT NULL, INDEX IDX_E18B3485ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE choose_use_service ADD CONSTRAINT FK_E18B3485ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choose_use_service DROP FOREIGN KEY FK_E18B3485ED5CA9E6');
        $this->addSql('DROP TABLE choose_use_service');
    }
}
