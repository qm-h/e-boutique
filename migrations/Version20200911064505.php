<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200911064505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles CHANGE idCategorie idCategorie INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lignesdecommandes DROP FOREIGN KEY FK_Article');
        $this->addSql('ALTER TABLE lignesdecommandes DROP quantite');
        $this->addSql('DROP INDEX fk_article ON lignesdecommandes');
        $this->addSql('CREATE INDEX IDX_1147F1AE12836594 ON lignesdecommandes (idArticle)');
        $this->addSql('ALTER TABLE lignesdecommandes ADD CONSTRAINT FK_Article FOREIGN KEY (idArticle) REFERENCES articles (idArticle)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE articles CHANGE idCategorie idCategorie INT NOT NULL');
        $this->addSql('ALTER TABLE lignesdecommandes DROP FOREIGN KEY FK_1147F1AE12836594');
        $this->addSql('ALTER TABLE lignesdecommandes ADD quantite NUMERIC(10, 2) NOT NULL');
        $this->addSql('DROP INDEX idx_1147f1ae12836594 ON lignesdecommandes');
        $this->addSql('CREATE INDEX FK_Article ON lignesdecommandes (idArticle)');
        $this->addSql('ALTER TABLE lignesdecommandes ADD CONSTRAINT FK_1147F1AE12836594 FOREIGN KEY (idArticle) REFERENCES articles (idArticle)');
    }
}
