<?php
namespace Harriswebworks\Glossary\Ui\Component\Listing\DataProviders\Harriswebworks\Glossary;


/**
 * Class Glossarys
 */
class Glossarys extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Harriswebworks\Glossary\Model\ResourceModel\Glossary\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
