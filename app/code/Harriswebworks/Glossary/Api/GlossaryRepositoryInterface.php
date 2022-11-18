<?php
namespace Harriswebworks\Glossary\Api;

use Harriswebworks\Glossary\Api\Data\GlossaryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface GlossaryRepositoryInterface
 *
 * @api
 */
interface GlossaryRepositoryInterface
{
    /**
     * Create or update a Glossary.
     *
     * @param GlossaryInterface $page
     * @return GlossaryInterface
     */
    public function save(GlossaryInterface $page);

    /**
     * Get a Glossary by Id
     *
     * @param int $id
     * @return GlossaryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Glossary with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve Glossarys which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a Glossary
     *
     * @param GlossaryInterface $page
     * @return GlossaryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Glossary with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(GlossaryInterface $page);

    /**
     * Delete a Glossary by Id
     *
     * @param int $id
     * @return GlossaryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
