<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221201203743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_tags_article (article_tags_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_F7CA92E660A90B03 (article_tags_id), INDEX IDX_F7CA92E67294869C (article_id), PRIMARY KEY(article_tags_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_tags_article ADD CONSTRAINT FK_F7CA92E660A90B03 FOREIGN KEY (article_tags_id) REFERENCES article_tags (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_tags_article ADD CONSTRAINT FK_F7CA92E67294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article ADD intro LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_tags_article DROP FOREIGN KEY FK_F7CA92E660A90B03');
        $this->addSql('ALTER TABLE article_tags_article DROP FOREIGN KEY FK_F7CA92E67294869C');
        $this->addSql('DROP TABLE article_tags_article');
        $this->addSql('ALTER TABLE article DROP intro');
    }
}
