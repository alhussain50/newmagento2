<?php
namespace Magento\BundleGraphQl\Model\Resolver\PriceRange;

/**
 * Interceptor class for @see \Magento\BundleGraphQl\Model\Resolver\PriceRange
 */
class Interceptor extends \Magento\BundleGraphQl\Model\Resolver\PriceRange implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Product\Price\ProviderPool $priceProviderPool, \Magento\CatalogGraphQl\Model\Resolver\Product\Price\Discount $discount, ?\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Deferred\Product $productDataProvider = null, ?\Magento\CatalogGraphQl\Model\PriceRangeDataProvider $priceRangeDataProvider = null)
    {
        $this->___init();
        parent::__construct($priceProviderPool, $discount, $productDataProvider, $priceRangeDataProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
