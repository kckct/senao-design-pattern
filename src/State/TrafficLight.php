<?php

namespace App\State;

/**
 * Class TrafficLight
 * @package App\State
 */
class TrafficLight
{
    /** @var LightStateInterface */
    private $lightState;

    /**
     * TrafficLight constructor.
     * @param LightStateInterface $lightState
     */
    public function __construct(LightStateInterface $lightState)
    {
        $this->lightState = $lightState;
    }

    /**
     * 顯示燈號
     * @return string
     */
    public function getLightState(): string
    {
        return $this->lightState->showLight();
    }

    /**
     * 改變燈號
     * @return void
     */
    public function changeLightState(): void
    {
        $this->lightState = $this->lightState->handle();
    }
}