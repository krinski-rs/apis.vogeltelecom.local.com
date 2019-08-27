<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821135545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Trigger para inserção na tabela de integração de invoice com o salesforce';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql(
<<<SQL
CREATE OR REPLACE FUNCTION public.insert_invoice_salesforce()
RETURNS trigger AS \$body\$
BEGIN
    IF NEW.id_status_invoice IN(2005, 2006, 2008) AND NEW.id_status_invoice != OLD.id_status_invoice THEN
        INSERT INTO public.invoice_salesforce(id_invoice, id_salesforce, data_criacao, data_integracao) 
        VALUES (NEW.id_invoice, NEW.id_salesforce, NOW(), NULL);
    END IF;
    IF (NEW.status_pagamento_salesforce != OLD.status_pagamento_salesforce) AND NEW.id_salesforce IS NOT NULL THEN
        INSERT INTO public.invoice_salesforce(id_invoice, id_salesforce, data_criacao, data_integracao) 
        VALUES (NEW.id_invoice, NEW.id_salesforce, NOW(), NULL);
    END IF;
    RETURN NEW;
END;
\$body\$ LANGUAGE plpgsql;
SQL
        );
         $this->addSql(
<<<SQL
CREATE TRIGGER cobranca_invoice_salesforce AFTER UPDATE ON public.invoice
FOR EACH ROW
EXECUTE PROCEDURE public.insert_invoice_salesforce();
SQL
        );
   }

    public function down(Schema $schema) : void
    {
        $this->addSql("DROP TRIGGER IF EXISTS cobranca_invoice_salesforce ON public.invoice;");
//         $this->addSql("DROP FUNCTION IF EXISTS public.insert_invoice_salesforce;");
    }
}
