<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Currency\Dependency;

interface CurrencyPostChangePluginInterface
{
    /**
     *  Specification:
     * - Plugin executed when currency is changed
     *
     * @api
     *
     * @param string $currencyCode
     *
     * @return string
     */
    public function execute($currencyCode);
}