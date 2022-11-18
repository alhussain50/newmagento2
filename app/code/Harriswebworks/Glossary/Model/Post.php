<?php
namespace Harriswebworks\Glossary\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'harriswebworks_glossary_glossary';

	protected $_cacheTag = 'harriswebworks_glossary_glossary';

	protected $_eventPrefix = 'harriswebworks_glossary_glossary';

	protected function _construct()
	{
		$this->_init('Harriswebworks\Glossary\Model\ResourceModel\Post');
	}

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