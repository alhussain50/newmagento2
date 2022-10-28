<?php
namespace HWW\Tutorial\Setup;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{

	public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('hww_sample_item'),
            [
                'name' => 'Item 1'
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('hww_sample_item'),
            [
                'name' => 'Item 2'
            ]
        );
        $setup->endSetup();
	}
}