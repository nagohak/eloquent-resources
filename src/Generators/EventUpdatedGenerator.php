<?php

declare(strict_types=1);

namespace Devjs\EloquentResources\Generators;

class EventUpdatedGenerator extends AbstractGenerator
{
    protected $groups = ['entity-event'];

    public function __construct()
    {
        $this->stub = file_get_contents(__DIR__ . '/../stubs/event_updated.stub');
    }
}
