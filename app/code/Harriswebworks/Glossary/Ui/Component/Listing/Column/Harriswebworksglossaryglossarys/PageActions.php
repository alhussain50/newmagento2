<?php
namespace Harriswebworks\Glossary\Ui\Component\Listing\Column\Harriswebworksglossaryglossarys;


/**
 * Class PageActions
 */
class PageActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            foreach ($dataSource["data"]["items"] as & $item) {
                $name = $this->getData("name");
                $id = "X";
                if(isset($item["glossary_id"]))
                {
                    $id = $item["glossary_id"];
                }
                $item[$name]["view"] = [
                    "href"=>$this->getContext()->getUrl(
                        "harriswebworks_glossary_glossarys/glossary/edit",["glossary_id"=>$id]),
                    "label"=>__("Edit")
                ];
            }
        }

        return $dataSource;
    }    
    
}
