<?php
// File app/code/local/SmartOsc/HelloWorld/sql/helloworld_setup/install-0.1.0.php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$table =$installer->getConnection()->newTable($installer->getTable())
    ->addColumn('id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ), 'Contact ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
    ), 'Name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
    ), 'Email')
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
    ), 'Phone')
    ->addColumn('company', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false,
    ), 'Company')
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT,null, array(
    'nullable' => false,
), 'Message');
$installer->getConnection()->createTable($table);

$installer->endSetup();
