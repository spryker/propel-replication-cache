<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PropelReplicationCache\Dependency\Client;

interface PropelReplicationCacheToStorageRedisClientInterface
{
    public function get(string $key): ?string;

    public function set(string $key, string $value, ?int $expireTTL = null): bool;
}
