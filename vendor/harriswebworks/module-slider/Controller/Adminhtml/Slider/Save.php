<?php

/**
 * Grid Admin Cagegory Map Record Save Controller.
 * @category  Harriswebworks
 * @package   Harriswebworks_Slider
 * @author    Harriswebworks
 * @copyright Copyright (c) 2010-2017 Harriswebworks Dhaka (https://harriswebworks.com)
 * @license   https://www.harriswebworks.com/license.html
 */

namespace Harriswebworks\Slider\Controller\Adminhtml\Slider;

class Save extends \Magento\Backend\App\Action {

    /**
     * @var \Harriswebworks\Slider\Model\SliderFactory
     */
    protected $sliderFactory;

//public $logger;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Harriswebworks\Slider\Model\GridFactory $gridFactory
     */
    public function __construct(
            \Magento\Backend\App\Action\Context $context,
            \Harriswebworks\Slider\Model\SliderFactory $sliderFactory
    ) {
        parent::__construct($context);
        $this->sliderFactory = $sliderFactory;
//        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/rti.log');
//        $this->logger = new \Zend_Log();
//        $this->logger->addWriter($writer);
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute() {
        $data = $this->getRequest()->getPostValue();

        if (!$data) {
            $this->_redirect('hww_slider/slider/edit');
            return;
        }
        try {
            $sliderData = $this->sliderFactory->create();
            $page_type = $data['page_type'];
            switch ($page_type) {
                case 0:
                    $data['category_id'] = '';
                    $data['cms_page_id'] = '';
                    $data['custom_route'] = '';
                    break;
                case 1:
                    $data['category_id'] = '';
                    $data['custom_route'] = '';
                    break;
                case 2:
                    $data['custom_route'] = '';
                    $data['cms_page_id'] = '';
                    break;
                case 3:
                    $data['category_id'] = '';
                    $data['cms_page_id'] = '';
                    break;
                default:
                    break;
            }
//            $this->logger->info('page_type' . print_r($data, true));
            $sliderData->setData($data);
            if (isset($data['slider_id'])) {
                $sliderData->setSliderId($data['slider_id']);
            }
            //var_dump($data);
            //exit;
            $sliderData->save();
            $this->messageManager->addSuccess(__('Slider has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('hww_slider/slider/index');
    }

    /**
     * @return bool
     */
    protected function _isAllowed() {
        return $this->_authorization->isAllowed('Harriswebworks_Slider::slider_edit');
    }

}
