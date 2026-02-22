<?php

namespace Symfony\Config\ZenstruckFoundry\DatabaseResetter;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrmConfig 
{
    private $connections;
    private $objectManagers;
    private $resetMode;
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
    public function objectManagers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['objectManagers'] = true;
        $this->objectManagers = $value;

        return $this;
    }

    /**
     * Whether to use doctrine:schema:update or migrations when resetting schema.
     * @default 'schema'
     * @param ParamConfigurator|'schema'|'migrate' $value
     * @return $this
     */
    public function resetMode($value): static
    {
        $this->_usedProperties['resetMode'] = true;
        $this->resetMode = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('connections', $config)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = $config['connections'];
            unset($config['connections']);
        }

        if (array_key_exists('object_managers', $config)) {
            $this->_usedProperties['objectManagers'] = true;
            $this->objectManagers = $config['object_managers'];
            unset($config['object_managers']);
        }

        if (array_key_exists('reset_mode', $config)) {
            $this->_usedProperties['resetMode'] = true;
            $this->resetMode = $config['reset_mode'];
            unset($config['reset_mode']);
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
        if (isset($this->_usedProperties['objectManagers'])) {
            $output['object_managers'] = $this->objectManagers;
        }
        if (isset($this->_usedProperties['resetMode'])) {
            $output['reset_mode'] = $this->resetMode;
        }

        return $output;
    }

}
