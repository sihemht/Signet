<?php

namespace Symfony\Config\ZenstruckFoundry\Orm;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResetConfig 
{
    private $connections;
    private $entityManagers;
    private $mode;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function connections(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['connections'] = true;
        $this->connections = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function entityManagers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['entityManagers'] = true;
        $this->entityManagers = $value;

        return $this;
    }

    /**
     * Reset mode to use with ResetDatabase trait
     * @default 'schema'
     * @param ParamConfigurator|'schema'|'migrate' $value
     * @return $this
     */
    public function mode($value): static
    {
        $this->_usedProperties['mode'] = true;
        $this->mode = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('connections', $config)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = $config['connections'];
            unset($config['connections']);
        }

        if (array_key_exists('entity_managers', $config)) {
            $this->_usedProperties['entityManagers'] = true;
            $this->entityManagers = $config['entity_managers'];
            unset($config['entity_managers']);
        }

        if (array_key_exists('mode', $config)) {
            $this->_usedProperties['mode'] = true;
            $this->mode = $config['mode'];
            unset($config['mode']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = $this->connections;
        }
        if (isset($this->_usedProperties['entityManagers'])) {
            $output['entity_managers'] = $this->entityManagers;
        }
        if (isset($this->_usedProperties['mode'])) {
            $output['mode'] = $this->mode;
        }

        return $output;
    }

}
