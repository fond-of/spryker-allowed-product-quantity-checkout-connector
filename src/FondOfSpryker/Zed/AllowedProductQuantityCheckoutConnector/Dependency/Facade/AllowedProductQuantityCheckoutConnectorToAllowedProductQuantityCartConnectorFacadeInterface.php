<?php

namespace FondOfSpryker\Zed\AllowedProductQuantityCheckoutConnector\Dependency\Facade;

use Generated\Shared\Transfer\ItemTransfer;

interface AllowedProductQuantityCheckoutConnectorToAllowedProductQuantityCartConnectorFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return \Generated\Shared\Transfer\MessageTransfer[]
     */
    public function validateQuoteItem(ItemTransfer $itemTransfer): array;
}
