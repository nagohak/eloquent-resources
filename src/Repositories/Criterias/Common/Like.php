<?php

declare(strict_types=1);

namespace Devjs\EloquentResources\Repositories\Criterias\Common;

use Devjs\EloquentResources\Repositories\Criterias\CriteriaInterface;
use Illuminate\Database\Eloquent\Builder;

class Like extends AbstractLike implements CriteriaInterface
{
}
