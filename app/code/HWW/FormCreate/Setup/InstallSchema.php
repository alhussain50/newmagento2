<?php
namespace HWW\MenuCreate\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('hww_form')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('hww_form')
            )
                ->addColumn('id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary' => true,
                        'unsigned' => true,
                    ], 'ID')
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'Name'
                )
                ->addColumn('content',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Content'
                )
                ->addColumn('title',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Title'
                );

            $installer->getConnection()->createTable($table);
            $installer->getConnection()->addIndex(

                $installer->getTable('hww_form'),
                $setup->getIdxName($installer->getTable('hww_form'),
                    ['name', 'content', 'title'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                    ['name', 'content', 'title'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}