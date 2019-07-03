<?php

namespace FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Communication\Plugin\CheckoutExtension;

use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\CheckoutExtension\Dependency\Plugin\CheckoutPreConditionPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\AllowedProductQuantityCheckoutConnectorConfig getConfig()
 * @method \FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Business\AllowedProductQuantityCheckoutConnectorFacadeInterface getFacade()
 */
class AllowedProductQuantityCheckoutPreConditionPlugin extends AbstractPlugin implements CheckoutPreConditionPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponseTransfer
     *
     * @return bool
     */
    public function checkCondition(QuoteTransfer $quoteTransfer, CheckoutResponseTransfer $checkoutResponseTransfer): bool
    {
        return true;
    }
}
