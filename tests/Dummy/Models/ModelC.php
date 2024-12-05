<?php

namespace Bvtterfly\ModelStateMachine\Tests\Dummy\Models;

use Bvtterfly\ModelStateMachine\HasStateMachine;
use Bvtterfly\ModelStateMachine\Tests\Dummy\States\TestStateWithStateTransition;

class ModelC extends StateTransitionModel
{
    use HasStateMachine;

    protected $casts = [
        'state' => TestStateWithStateTransition::class,
    ];

    public function getStateMachineFields(): array
    {
        return ['state'];
    }
}
