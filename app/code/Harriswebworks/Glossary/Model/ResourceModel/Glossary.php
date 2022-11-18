<?php
namespace Harriswebworks\Glossary\Model\ResourceModel;

/**
 * Class Glossary
 */
class Glossary extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('harriswebworks_glossary_glossary', 'glossary_id');
    }
}
