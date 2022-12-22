<?php

namespace Harriswebworks\Slider\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class SlideActions extends Column
{

    const URL_PATH_EDIT = 'hww_slider/slide/edit';
    const URL_PATH_DELETE = 'hww_slider/slide/delete';
    const URL_PATH_DETAILS = 'hww_slider/slide/details';

    protected $urlBuilder;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $name = $this->getData('name');
                if (isset($item['slide_id'])) {
                    $item[$name]['edit'] = [
                         'href' => $this->urlBuilder->getUrl(
                                static::URL_PATH_EDIT,
                                [
                                'slide_id' => $item['slide_id']
                                    ]
                            ),
                        'label' => __('Edit')
                    ];
                    $title = $item['name'];
                    $item[$name]['delete'] = [
                        'href' => $this->urlBuilder->getUrl(
                                static::URL_PATH_DELETE,
                                [
                                'slide_id' => $item['slide_id']
                                    ]
                            ),
                        'label' => __('Delete'),
                        'confirm' => [
                            'title' => __('Delete %1', $title),
                            'message' => __('Are you sure you want to delete a %1 record?', $title)
                        ]
                    ];
                }
            }
        }


        return $dataSource;
    }
}
