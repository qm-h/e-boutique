<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916135149 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY Fk_categorie');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY Fk_categorie');
        $this->addSql('DROP INDEX fk_bfdd3168b597fd62 ON articles');
        $this->addSql('CREATE INDEX fk_category ON articles (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT Fk_categorie FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commandes ADD idClient INT NOT NULL');
        $this->addSql('ALTER TABLE panier ADD panier LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD total DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168B597FD62');
        $this->addSql('DROP INDEX fk_category ON articles');
        $this->addSql('CREATE INDEX FK_BFDD3168B597FD62 ON articles (idCategorie)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168B597FD62 FOREIGN KEY (idCategorie) REFERENCES categories (idCategorie)');
        $this->addSql('ALTER TABLE categories CHANGE idCategorie idCategorie INT NOT NULL');
        $this->addSql('ALTER TABLE commandes DROP idClient');
        $this->addSql('ALTER TABLE panier DROP panier, DROP total');
    }
}
