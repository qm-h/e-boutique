<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200911094832 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles CHANGE idCategorie idCategorie INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('DROP INDEX idcategorie ON articles');
        $this->addSql('CREATE INDEX fk_category ON articles (idCategorie)');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY Fk_categorie');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commandes ADD idClient INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('ALTER TABLE articles CHANGE idCategorie idCategorie INT NOT NULL');
        $this->addSql('DROP INDEX fk_category ON articles');
        $this->addSql('CREATE INDEX idCategorie ON articles (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT NOT NULL');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT Fk_categorie FOREIGN KEY (idCategorie) REFERENCES articles (idArticle)');
        $this->addSql('ALTER TABLE commandes DROP idClient');
    }
}
