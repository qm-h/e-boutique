<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200917062450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        
        
        
       
        $this->addSql('ALTER TABLE commandes ADD idClient INT NOT NULL');
        $this->addSql('ALTER TABLE panier ADD panier LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD total DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        

        $this->addSql('ALTER TABLE commandes DROP idClient');
        $this->addSql('ALTER TABLE panier DROP panier, DROP total');
    }
}