<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916074223 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, panier LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', total DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('DROP INDEX idcategorie ON articles');
        $this->addSql('CREATE INDEX fk_category ON articles (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY Fk_categorie');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commandes ADD idClient INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE panier');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('DROP INDEX fk_category ON articles');
        $this->addSql('CREATE INDEX idCategorie ON articles (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT NOT NULL');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT Fk_categorie FOREIGN KEY (idCategorie) REFERENCES articles (idArticle)');
        $this->addSql('ALTER TABLE commandes DROP idClient');
    }
}
