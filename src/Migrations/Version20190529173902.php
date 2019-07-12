<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190529173902 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circuito_salesforce (
  id int(11) NOT NULL AUTO_INCREMENT,
  cont_codigoid int(11) NOT NULL,
  id_circuito_salesforce VARCHAR(50) DEFAULT NULL,
  data_criacao timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  data_integracao timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_circuito_salesforce_cont_codigoid FOREIGN KEY (cont_codigoid) REFERENCES contrato (cont_codigoid) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1');
        $this->addSql('ALTER TABLE financeiro.contrato  ADD COLUMN salesforce_id VARCHAR(50) NULL AFTER cont_segregar_valor;');
        $this->addSql('ALTER TABLE financeiro.contrato  ADD COLUMN protheus_id VARCHAR(50) NULL AFTER salesforce_id;');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE circuito_salesforce;');
        $this->addSql('ALTER TABLE financeiro.contrato DROP COLUMN salesforce_id');
        $this->addSql('ALTER TABLE financeiro.contrato DROP COLUMN protheus_id');
    }
}
