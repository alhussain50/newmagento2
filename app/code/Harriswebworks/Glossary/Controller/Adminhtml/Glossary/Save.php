<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Glossary;

use Magento\Backend\App\Action;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
            

/**
 * Class Save
 */
class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Harriswebworks_Glossary::glossarys';

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var \Harriswebworks\Glossary\Model\GlossaryRepository
     */
    protected $objectRepository;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param \Harriswebworks\Glossary\Model\GlossaryRepository $objectRepository
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor,
        \Harriswebworks\Glossary\Model\GlossaryRepository $objectRepository
    ) {
        $this->dataPersistor    = $dataPersistor;
        $this->objectRepository  = $objectRepository;

        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            if (isset($data['is_active']) && $data['is_active'] === 'true') {
                $data['is_active'] = Harriswebworks\Glossary\Model\Glossary::STATUS_ENABLED;
            }
            if (empty($data['glossary_id'])) {
                $data['glossary_id'] = null;
            }

            /** @var \Harriswebworks\Glossary\Model\Glossary $model */
            $model = $this->_objectManager->create('Harriswebworks\Glossary\Model\Glossary');

            $id = $this->getRequest()->getParam('glossary_id');
            if ($id) {
                $model = $this->objectRepository->getById($id);
            }

            $model->setData($data);

            try {
                $this->objectRepository->save($model);
                $this->messageManager->addSuccess(__('You saved the thing.'));
                $this->dataPersistor->clear('harriswebworks_glossary_glossary');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['glossary_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }

            $this->dataPersistor->set('harriswebworks_glossary_glossary', $data);
            return $resultRedirect->setPath('*/*/edit', ['glossary_id' => $this->getRequest()->getParam('glossary_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
