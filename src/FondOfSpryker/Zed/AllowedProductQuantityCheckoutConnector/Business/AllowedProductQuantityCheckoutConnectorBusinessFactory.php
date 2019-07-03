<?php

namespace FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Business;

use FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\AllowedProductQuantityCheckoutConnectorDependencyProvider;
use FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Business\Model\CheckoutPreConditionChecker;
use FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Business\Model\CheckoutPreConditionCheckerInterface;
use FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Dependency\Facade\AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\AllowedProductQuantityCheckoutConnectorConfig getConfig()
 */
class AllowedProductQuantityCheckoutConnectorBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Business\Model\CheckoutPreConditionCheckerInterface
     */
    public function createCheckoutPreConditionChecker(): CheckoutPreConditionCheckerInterface
    {
        return new CheckoutPreConditionChecker($this->getAllowedProductQuantityCartConnectorFacade());
    }

    /**
     * @throws
     *
     * @return \FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Dependency\Facade\AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeInterface
     */
    protected function getAllowedProductQuantityCartConnectorFacade(): AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeInterface
    {
        return $this->getProvidedDependency(AllowedProductQuantityCheckoutConnectorDependencyProvider::FACADE_ALLOWED_PRODUCT_QUANTITY_CART_CONNECTOR);
    }
}
