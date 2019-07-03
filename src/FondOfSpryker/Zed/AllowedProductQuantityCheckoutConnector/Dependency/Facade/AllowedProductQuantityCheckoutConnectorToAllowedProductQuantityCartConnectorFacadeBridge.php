<?php

namespace FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Dependency\Facade;

use FondOfSpryker\Zed\AllowedProductQuantityCartConnector\Business\AllowedProductQuantityCartConnectorFacadeInterface;
use Generated\Shared\Transfer\ItemTransfer;

class AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeBridge implements AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeInterface
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantityCartConnector\Business\AllowedProductQuantityCartConnectorFacadeInterface
     */
    protected $allowedProductQuantityCartConnectorFacade;

    /**
     * @param \FondOfSpryker\Zed\AllowedProductQuantityCartConnector\Business\AllowedProductQuantityCartConnectorFacadeInterface $allowedProductQuantityCartConnectorFacade
     */
    public function __construct(
        AllowedProductQuantityCartConnectorFacadeInterface $allowedProductQuantityCartConnectorFacade
    ) {
        $this->allowedProductQuantityCartConnectorFacade = $allowedProductQuantityCartConnectorFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return \Generated\Shared\Transfer\MessageTransfer[]
     */
    public function validateQuoteItem(ItemTransfer $itemTransfer): array
    {
        return $this->allowedProductQuantityCartConnectorFacade->validateQuoteItem($itemTransfer);
    }
}
