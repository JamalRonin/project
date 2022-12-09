<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129105601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE slider_realisation (id INT AUTO_INCREMENT NOT NULL, realisation_id INT DEFAULT NULL, img VARCHAR(50) NOT NULL, alt VARCHAR(50) NOT NULL, INDEX IDX_936B27F5B685E551 (realisation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slider_realisation ADD CONSTRAINT FK_936B27F5B685E551 FOREIGN KEY (realisation_id) REFERENCES realisation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider_realisation DROP FOREIGN KEY FK_936B27F5B685E551');
        $this->addSql('DROP TABLE slider_realisation');
    }
}
