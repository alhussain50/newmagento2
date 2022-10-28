<?php
namespace HWW\Tutorial\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
	public function upgrade(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$setup->startSetup();

        if(version_compare($context->getVersion(), '1.0.1', '<')){
            $setup->getConnection()->update(
                $setup->getTable('hww_sample_item'),
                [
                    'description' => 'Default description'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }

        $setup->endSetup();
	}
}