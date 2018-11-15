<?php

namespace EB\AwesomePlugin\Model;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return "Awesome " . $result;
    }
}
