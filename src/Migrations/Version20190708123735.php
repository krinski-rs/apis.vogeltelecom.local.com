<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190708123735 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Adição dos campos para integração com o PROTHEUS.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE circuito_salesforce ADD COLUMN id_circuito_protheus VARCHAR(50) AFTER id_circuito_salesforce;');
        $this->addSql('ALTER TABLE circuito_salesforce ADD COLUMN data_integracao_protheus VARCHAR(50) AFTER data_integracao;');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE circuito_salesforce DROP COLUMN id_circuito_protheus;');
        $this->addSql('ALTER TABLE circuito_salesforce DROP COLUMN data_integracao_protheus;');
    }
}
