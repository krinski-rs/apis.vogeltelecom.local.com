<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190924135528 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Trigger para inserção na tabela financeiro.circuito_salesforce quando o valor do contrato for atualizado.';
    }
    
    public function up(Schema $schema) : void
    {
        $this->addSql(
<<<SQL
DROP TRIGGER IF EXISTS `financeiro`.`UPDATE_CONTRATOVALOR`;
CREATE DEFINER=`root`@`%` TRIGGER `financeiro`.`UPDATE_CONTRATOVALOR` AFTER UPDATE ON `financeiro`.`contratovalor` FOR EACH ROW
BEGIN
    DECLARE contCodigoid INT(11) DEFAULT NULL;
    DECLARE salesforceId INT(11) DEFAULT NULL;
    DECLARE contvaloValor DECIMAL(10, 2) DEFAULT NULL;
    IF NEW.contvalo_proximocodigoid IS NOT NULL AND NEW.natu_codigoid = 4 THEN
        SELECT salesforce_id, cont.cont_codigoid, contvalo_valor INTO salesforceId, contCodigoid, contvaloValor FROM `financeiro`.`contrato` AS cont
        INNER JOIN `financeiro`.`contratovalor` AS contvalo ON (contvalo.cont_codigoid = cont.cont_codigoid)
        WHERE contvalo.contvalo_codigoid = NEW.contvalo_proximocodigoid LIMIT 1;
        IF contCodigoid IS NOT NULL AND NEW.contvalo_valor != contvaloValor THEN
            INSERT INTO financeiro.circuito_salesforce 
            (cont_codigoid, id_circuito_salesforce, data_criacao, data_integracao)
            VALUES
            (contCodigoid, salesforceId, CURRENT_TIMESTAMP, NULL);
        END IF;
        IF salesforceId IS NOT NULL THEN
            UPDATE financeiro.circuito_salesforce SET id_circuito_salesforce = salesforceId
                WHERE cont_codigoid =  NEW.cont_codigoid;
            END IF;
    END IF;
END
SQL
        );
    }
    
    public function down(Schema $schema) : void
    {
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`UPDATE_CONTRATOVALOR`;");
    }
}
