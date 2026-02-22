<?php

namespace Symfony\Config\ZenstruckFoundry;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'ResetConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrmConfig 
{
    private $reset;
    private $_usedProperties = [];

    /**
     * @default {"connections":["default"],"entity_managers":["default"],"mode":"schema"}
     */
    public function reset(array $value = []): \Symfony\Config\ZenstruckFoundry\Orm\ResetConfig
    {
        if (null === $this->reset) {
            $this->_usedProperties['reset'] = true;
            $this->reset = new \Symfony\Config\ZenstruckFoundry\Orm\ResetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reset()" has already been initialized. You cannot pass values the second time you call reset().');
        }

        return $this->reset;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('reset', $config)) {
            $this->_usedProperties['reset'] = true;
            $this->reset = new \Symfony\Config\ZenstruckFoundry\Orm\ResetConfig($config['reset']);
            unset($config['reset']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['reset'])) {
            $output['reset'] = $this->reset->toArray();
        }

        return $output;
    }

}
