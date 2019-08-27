<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190821123038 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Migration para integração das invoices com o Salesforce.';
    }

    public function up(Schema $objSchema) : void
    {
        if(!$objSchema->hasTable('invoice_salesforce')){
            $objTable = $objSchema->createTable("invoice_salesforce");
            $objTable->addColumn('id', 'integer', ['autoincrement' => true]);
            $objTable->addColumn('id_invoice', 'integer');
            $objTable->addColumn('id_salesforce', 'string', ['notnull' => false]);
            $objTable->addColumn('data_criacao', 'datetime');
            $objTable->addColumn('data_integracao', 'datetime', ['notnull' => false]);
            $objTable->setPrimaryKey(array('id'));
        }
        
        $objTableInvoice = $objSchema->getTable('invoice');
        if(!$objTableInvoice->hasColumn("id_salesforce")){
            $objTableInvoice->addColumn('id_salesforce', 'string', ['notnull' => false]);
        }
        
        if(!$objTableInvoice->hasColumn("status_pagamento_salesforce")){
            $objTableInvoice->addColumn('status_pagamento_salesforce', 'boolean', ['default' => false]);
        }
        
        if(!$objTableInvoice->hasColumn("numero_nota")){
            $objTableInvoice->addColumn('numero_nota', 'string', ['notnull' => false, 'default' =>NULL]);
        }
    }

    public function down(Schema $objSchema) : void
    {
        if($objSchema->hasTable('invoice_salesforce')){
            $objSchema->dropTable("invoice_salesforce");
        }
        
        $objTableInvoice = $objSchema->getTable('invoice');
        if($objTableInvoice->hasColumn("id_salesforce")){
            $objTableInvoice->dropColumn('id_salesforce');
        }
        
        if($objTableInvoice->hasColumn("status_pagamento_salesforce")){
            $objTableInvoice->dropColumn('status_pagamento_salesforce');
        }
        
        if($objTableInvoice->hasColumn("numero_nota")){
            $objTableInvoice->dropColumn('numero_nota');
        }
    }
}
