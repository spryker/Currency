<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Currency\Business\Reader;

use Spryker\Shared\Kernel\Store;

class CurrencyIsoCodeReader implements CurrencyIsoCodeReaderInterface
{
    /**
     * @var \Spryker\Shared\Kernel\Store
     */
    protected $store;

    /**
     * @param \Spryker\Shared\Kernel\Store $store
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * @return string
     */
    public function getCurrentCurrencyIsoCode(): string
    {
        return $this->store->getCurrencyIsoCode();
    }
}
