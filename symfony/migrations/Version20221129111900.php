<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129111900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE realisation_detail (id INT AUTO_INCREMENT NOT NULL, realisation_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, skills VARCHAR(255) NOT NULL, client VARCHAR(100) NOT NULL, fin_de_realisation VARCHAR(100) NOT NULL, manager VARCHAR(100) NOT NULL, adresse VARCHAR(255) NOT NULL, INDEX IDX_45A78E08B685E551 (realisation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE realisation_detail ADD CONSTRAINT FK_45A78E08B685E551 FOREIGN KEY (realisation_id) REFERENCES realisation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisation_detail DROP FOREIGN KEY FK_45A78E08B685E551');
        $this->addSql('DROP TABLE realisation_detail');
    }
}
