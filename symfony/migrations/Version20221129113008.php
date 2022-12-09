<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129113008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE checklist_realisation (id INT AUTO_INCREMENT NOT NULL, realisation_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, li1 VARCHAR(255) NOT NULL, li2 VARCHAR(255) NOT NULL, li3 VARCHAR(255) NOT NULL, li4 VARCHAR(255) NOT NULL, li5 VARCHAR(255) NOT NULL, information LONGTEXT NOT NULL, img VARCHAR(50) NOT NULL, alt VARCHAR(50) NOT NULL, INDEX IDX_FC69D19EB685E551 (realisation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE checklist_realisation ADD CONSTRAINT FK_FC69D19EB685E551 FOREIGN KEY (realisation_id) REFERENCES realisation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE checklist_realisation DROP FOREIGN KEY FK_FC69D19EB685E551');
        $this->addSql('DROP TABLE checklist_realisation');
    }
}
