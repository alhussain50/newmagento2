<?php
namespace Harriswebworks\CustomCategory\Setup;

use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('harriswebworks_items')
        )->addColumn(
            'index',
            Table::TYPE_INTEGER,
            null, //size of column, null uses default size
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Index'
        )->addColumn(
            'category_name',
            Table::TYPE_TEXT,
            255, //size of column, null uses default size
            ['nullable' => true],
            'Category Name'
        )->addColumn(
            'title',
            Table::TYPE_TEXT,
            255, //size of column, null uses default size
            ['nullable' => false],
            'Title'
        )->addColumn(
            'description',
            Table::TYPE_TEXT,
            255, //size of column, null uses default size
            ['nullable' => false],
            'Description'
        )->addIndex(
            $setup->getIdxName('harriswebworks_items', ['title']),
            ['title']
        )->setComment(
            'Sample Items'
        );

        $setup->getConnection()->createTable($table);


        // CategoryTable
        $table = $setup->getConnection()->newTable(
            $setup->getTable('harriswebworks_category')
        )->addColumn( 
            'category_id',
            Table::TYPE_INTEGER,
            null, //size of column, null uses default size
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Category ID'
        )->addColumn(
            'category_name',
            Table::TYPE_TEXT,
            255, //size of column, null uses default size
            ['nullable' => true],
            'Category Name'
        )->addIndex(
            $setup->getIdxName('harriswebworks_category', ['category_name']),
            ['category_name']
        )->setComment(
            'Category List'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
	}
}