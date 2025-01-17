<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Visit\Persistence;

use Happyr\DoctrineSpecification\Specification\Specification;
use Shlinkio\Shlink\Common\Util\DateRange;

final class VisitsListFiltering extends VisitsCountFiltering
{
    public function __construct(
        ?DateRange $dateRange = null,
        bool $excludeBots = false,
        ?Specification $spec = null,
        private ?int $limit = null,
        private ?int $offset = null,
    ) {
        parent::__construct($dateRange, $excludeBots, $spec);
    }

    public function limit(): ?int
    {
        return $this->limit;
    }

    public function offset(): ?int
    {
        return $this->offset;
    }
}
