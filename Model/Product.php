<?php

namespace EB\AwesomePlugin\Model;

class Product
{
    private $scopeConfig;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        $this->scopeConfig = $scopeConfig;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $isModuleEnabled = $this->scopeConfig->getValue('ampersand/general/awesomeplugin', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        if (!$isModuleEnabled) {
            return $result;
        }

        return "Awesome " . $result;
    }
}
