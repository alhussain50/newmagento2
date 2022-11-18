<?php
namespace Harriswebworks\Glossary\Model;

/**
 * Class Glossary
 */
class Glossary extends \Magento\Framework\Model\AbstractModel implements
    \Harriswebworks\Glossary\Api\Data\GlossaryInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'harriswebworks_glossary_glossary';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Harriswebworks\Glossary\Model\ResourceModel\Glossary::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
