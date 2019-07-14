<?php
/**
 * Created by   : Dmitry Shirokovskiy.
 * Email        : info@phpwebstudio.com
 * Date         : 14.07.19
 * Time         : 21:57
 * Description  :
 */

class Phpwebstudio_Sizechart_Model_Observer
{
    public function updateSizechart($observer)
    {
        # Get the product
        $product = $observer->getEvent()->getProduct();

        if ($product->dataHasChangedFor('gender')) {
            /**
             * ToDo: should get size chart from DB table, etc.
             */
            switch ($product->getGender()) {
                case "Men":
                    $product->setSizeChart("UK");
                    break;

                case "Women":
                    $product->setSizeChart("US");
                    break;

                case "Unisex":
                    $product->setSizeChart("FR");
                    break;

                default: break;
            }

            Mage::log("Gender = " . $product->getGender(), null, 'my-log.txt', true);
        }
    }
}
