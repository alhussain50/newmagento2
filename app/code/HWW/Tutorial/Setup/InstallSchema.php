<?php
namespace HWW\Tutorial\Setup;

use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('hww_sample_item')
        )->addColumn( 
            'id',
            Table::TYPE_INTEGER,
            null, //size of column, null uses default size
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT, 
            255, //size of column, null uses default size
            ['nullable' => false],
            'Item Name'
        )->addIndex(
            $setup->getIdxName('hww_sample_item', ['name']),
            ['name']
        )->setComment(
            'Sample Items'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
	}
}