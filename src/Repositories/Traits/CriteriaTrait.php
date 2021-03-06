<?php

declare(strict_types=1);

namespace Devjs\EloquentResources\Repositories\Traits;

use Devjs\EloquentResources\Repositories\Criterias\CriteriaInterface;
use Devjs\EloquentResources\Repositories\Interfaces\RepositoryInterface;

trait CriteriaTrait
{
    protected $criterias = [];

    public function pushCriteria(CriteriaInterface $criteria): void
    {
        $this->criterias[] = $criteria;
    }

    public function applyCriteria(): RepositoryInterface
    {
        /** @var CriteriaInterface $criteria */
        foreach ($this->criterias as $criteria) {
            $this->model = $criteria->apply($this->model->newQuery());
        }

        return $this;
    }
}
