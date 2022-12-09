<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221201204825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_li ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article_li ADD CONSTRAINT FK_71520E647294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_71520E647294869C ON article_li (article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_li DROP FOREIGN KEY FK_71520E647294869C');
        $this->addSql('DROP INDEX IDX_71520E647294869C ON article_li');
        $this->addSql('ALTER TABLE article_li DROP article_id');
    }
}
