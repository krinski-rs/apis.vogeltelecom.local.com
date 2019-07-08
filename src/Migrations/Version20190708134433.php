<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190708134433 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Criação das Triggers.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`UPDATE_ATIVACAO_CONTRATO`;");
        $this->addSql("CREATE DEFINER=`root`@`%` TRIGGER `UPDATE_ATIVACAO_CONTRATO` BEFORE UPDATE ON `contrato`
            FOR EACH ROW BEGIN
            	DECLARE clieCodigoid INT(11) DEFAULT 0;
            	DECLARE ativpagaCodigoid INT(11) DEFAULT 0;
            	DECLARE contDatainc DATE DEFAULT CURRENT_DATE;
            	DECLARE grupserviCodigoid INT(11) DEFAULT 0;
                DECLARE unidCodigoid INT(11) DEFAULT 0;
            
            	SELECT DISTINCT serv.grupserv_codigoid INTO grupserviCodigoid FROM contrato AS cont
            	INNER JOIN contratoservico AS contserv ON (contserv.cont_codigoid = cont.cont_codigoid)
            	INNER JOIN servicocapacidade AS servcapa ON (servcapa.servcapa_codigoid = contserv.servcapa_codigoid)
            	INNER JOIN servico AS serv ON (serv.serv_codigoid = servcapa.serv_codigoid)
            	WHERE cont.cont_codigoid =  NEW.cont_paicodigoid;
            	
            	SELECT clie_codigoid, DATE_FORMAT(cont_datainc, '%Y-%m-%d'), unid_codigoid INTO clieCodigoid, contDatainc, unidCodigoid FROM contrato WHERE cont_codigoid =  NEW.cont_paicodigoid;
            	
            	IF NEW.cont_paicodigoid IS NOT NULL AND clieCodigoid > 1000 AND contDatainc = CURRENT_DATE AND grupserviCodigoid = 2   THEN
            		SELECT ativpag_codigoid INTO ativpagaCodigoid FROM ativacaopagamento WHERE cont_codigoid =  NEW.cont_codigoid LIMIT 1;
            		IF ativpagaCodigoid =0 THEN
            			INSERT INTO ativacaopagamento (cont_codigoid, ativpag_cobrado) VALUES (NEW.cont_codigoid, 0);
            		END IF;
            	END IF;
            
            	IF NEW.stat_codigoid=4 AND OLD.stat_codigoid != 4 THEN
            		SET NEW.cont_datacancelamento = NOW();
            	END IF;
                
                IF NEW.cont_paicodigoid is null THEN
                    SET NEW.cont_tipo = 'P';
                ELSE 
                    SET NEW.cont_tipo = 'F';
                END IF;
                
            	IF NEW.cont_paicodigoid IS NOT NULL AND clieCodigoid > 0 AND (NEW.salesforce_id != OLD.salesforce_id) THEN
            		INSERT INTO financeiro.circuito_salesforce 
            		(cont_codigoid, id_circuito_salesforce, data_criacao, data_integracao)
            		VALUES
            		(NEW.cont_codigoid, NEW.salesforce_id, CURRENT_TIMESTAMP, NULL);
                    
            		IF NEW.salesforce_id IS NOT NULL THEN
            			UPDATE financeiro.circuito_salesforce SET id_circuito_salesforce = NEW.salesforce_id
                        WHERE cont_codigoid =  NEW.cont_codigoid;
                    END IF;
            	END IF;
                
            END");
        
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`contrato_AFTER_INSERT`;");
        $this->addSql("CREATE DEFINER=`root`@`%` TRIGGER `financeiro`.`contrato_AFTER_INSERT` AFTER INSERT ON `contrato` 
            FOR EACH ROW
            BEGIN
            	DECLARE clieCodigoid INT(11) DEFAULT 0;
            	SELECT clie_codigoid INTO clieCodigoid FROM contrato WHERE cont_codigoid =  NEW.cont_paicodigoid;
            	IF NEW.cont_paicodigoid IS NOT NULL AND clieCodigoid > 0 THEN
            		INSERT INTO financeiro.circuito_salesforce 
            		(cont_codigoid, id_circuito_salesforce, data_criacao, data_integracao)
            		VALUES
            		(NEW.cont_codigoid, NEW.salesforce_id, CURRENT_TIMESTAMP, NULL);
            		IF NEW.salesforce_id IS NOT NULL THEN
            			UPDATE financeiro.circuito_salesforce SET id_circuito_salesforce = NEW.salesforce_id
                        WHERE cont_codigoid =  NEW.cont_codigoid;
                    END IF;
            	END IF;
            END");
        
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`enderecoentrega_AFTER_UPDATE`;");
        $this->addSql("CREATE DEFINER=`root`@`%` TRIGGER `financeiro`.`enderecoentrega_AFTER_UPDATE` AFTER UPDATE ON `enderecoentrega` 
            FOR EACH ROW
            BEGIN
                 
            	DECLARE contCodigoid INT(11) DEFAULT NULL;
             	DECLARE salesforceId INT(11) DEFAULT NULL;
             	DECLARE idCircuitoSalesforce INT(11) DEFAULT NULL;
            
             	SELECT DISTINCT cont.cont_codigoid, cont.salesforce_id INTO contCodigoid, salesforceId 
                FROM financeiro.enderecoentrega AS endeentr
             	INNER JOIN financeiro.contrato AS cont ON (cont.endeentr_codigoid = endeentr.endeentr_codigoid)
             	INNER JOIN financeiro.contrato AS pai ON (pai.cont_codigoid = cont.cont_codigoid)
             	WHERE cont.endeentr_codigoid =  NEW.endeentr_codigoid AND cont.cont_paicodigoid IS NOT NULL 
                AND cont.cont_paicodigoid IS NOT NULL AND pai.cont_proximocodigoid IS NULL 
                AND cont.stat_codigoid IN (1,2,3,10,11,12);
                 
             	IF contCodigoid IS NOT NULL THEN
            		SELECT id INTO idCircuitoSalesforce FROM financeiro.circuito_salesforce
                    WHERE cont_codigoid = contCodigoid AND data_integracao IS NULL LIMIT 1;
                    IF idCircuitoSalesforce IS NULL THEN
            			INSERT INTO financeiro.circuito_salesforce 
            			(cont_codigoid, id_circuito_salesforce, data_criacao, data_integracao)
            			VALUES
            			(contCodigoid, salesforceId, CURRENT_TIMESTAMP, NULL);
            			IF salesforceId IS NOT NULL THEN
            				UPDATE financeiro.circuito_salesforce SET id_circuito_salesforce = salesforceId
            				 WHERE cont_codigoid =  NEW.cont_codigoid;
            			END IF;
                     END IF;
            	END IF;
            END");
        
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`enderecoentregaatributovalor_AFTER_UPDATE`;");
        $this->addSql("CREATE DEFINER=`root`@`%` TRIGGER `financeiro`.`enderecoentregaatributovalor_AFTER_UPDATE` AFTER UPDATE ON `enderecoentregaatributovalor` FOR EACH ROW
            BEGIN
             
             	DECLARE contCodigoid INT(11) DEFAULT NULL;
             	DECLARE salesforceId INT(11) DEFAULT NULL;
             	DECLARE idCircuitoSalesforce INT(11) DEFAULT NULL;
                
             	SELECT DISTINCT cont.cont_codigoid, cont.salesforce_id INTO contCodigoid, salesforceId FROM enderecoentregaatributovalor AS endeentratrivalo
             	INNER JOIN contrato AS cont ON (cont.cont_codigoid = endeentratrivalo.cont_codigoid)
             	WHERE cont.cont_codigoid =  NEW.cont_codigoid AND cont.cont_paicodigoid IS NOT NULL;
                 
             	IF contCodigoid IS NOT NULL THEN
            		SELECT id INTO idCircuitoSalesforce FROM financeiro.circuito_salesforce
                    WHERE cont_codigoid = contCodigoid AND data_integracao IS NULL LIMIT 1;
                    IF idCircuitoSalesforce IS NULL THEN
            			INSERT INTO financeiro.circuito_salesforce 
            			(cont_codigoid, id_circuito_salesforce, data_criacao, data_integracao)
            			VALUES
            			(contCodigoid, salesforceId, CURRENT_TIMESTAMP, NULL);
            			IF salesforceId IS NOT NULL THEN
            				UPDATE financeiro.circuito_salesforce SET id_circuito_salesforce = salesforceId
            				 WHERE cont_codigoid =  NEW.cont_codigoid;
            			 END IF;
                     END IF;
             	END IF;
            END");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`UPDATE_ATIVACAO_CONTRATO`;");
        $this->addSql("CREATE DEFINER=`root`@`%` TRIGGER `UPDATE_ATIVACAO_CONTRATO` BEFORE UPDATE ON `contrato`
            FOR EACH ROW BEGIN
            	DECLARE clieCodigoid INT(11) DEFAULT 0;
            	DECLARE ativpagaCodigoid INT(11) DEFAULT 0;
            	DECLARE contDatainc DATE DEFAULT CURRENT_DATE;
            	DECLARE grupserviCodigoid INT(11) DEFAULT 0;
                DECLARE unidCodigoid INT(11) DEFAULT 0;
            
            	SELECT DISTINCT serv.grupserv_codigoid INTO grupserviCodigoid FROM contrato AS cont
            	INNER JOIN contratoservico AS contserv ON (contserv.cont_codigoid = cont.cont_codigoid)
            	INNER JOIN servicocapacidade AS servcapa ON (servcapa.servcapa_codigoid = contserv.servcapa_codigoid)
            	INNER JOIN servico AS serv ON (serv.serv_codigoid = servcapa.serv_codigoid)
            	WHERE cont.cont_codigoid =  NEW.cont_paicodigoid;
            
            	SELECT clie_codigoid, DATE_FORMAT(cont_datainc, '%Y-%m-%d'), unid_codigoid INTO clieCodigoid, contDatainc, unidCodigoid FROM contrato WHERE cont_codigoid =  NEW.cont_paicodigoid;
            
            	IF NEW.cont_paicodigoid IS NOT NULL AND clieCodigoid > 1000 AND contDatainc = CURRENT_DATE AND grupserviCodigoid = 2   THEN
            		SELECT ativpag_codigoid INTO ativpagaCodigoid FROM ativacaopagamento WHERE cont_codigoid =  NEW.cont_codigoid LIMIT 1;
            		IF ativpagaCodigoid =0 THEN
            			INSERT INTO ativacaopagamento (cont_codigoid, ativpag_cobrado) VALUES (NEW.cont_codigoid, 0);
            		END IF;
            	END IF;
            
            	IF NEW.stat_codigoid=4 AND OLD.stat_codigoid != 4 THEN
            		SET NEW.cont_datacancelamento = NOW();
            	END IF;
            
                IF NEW.cont_paicodigoid is null THEN
                    SET NEW.cont_tipo = 'P';
                ELSE
                    SET NEW.cont_tipo = 'F';
                END IF;
            END");
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`contrato_AFTER_INSERT`;");
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`enderecoentrega_AFTER_UPDATE`;");
        $this->addSql("DROP TRIGGER IF EXISTS `financeiro`.`enderecoentregaatributovalor_AFTER_UPDATE`;");
    }
}
