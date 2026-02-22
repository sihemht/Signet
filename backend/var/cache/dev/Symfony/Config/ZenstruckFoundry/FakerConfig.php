<?php

namespace Symfony\Config\ZenstruckFoundry;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FakerConfig 
{
    private $locale;
    private $seed;
    private $service;
    private $_usedProperties = [];

    /**
     * Change the default faker locale.
     * @example fr_FR
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): static
    {
        $this->_usedProperties['locale'] = true;
        $this->locale = $value;

        return $this;
    }

    /**
     * Random number generator seed to produce the same fake values every run
     * @example 1234
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function seed($value): static
    {
        $this->_usedProperties['seed'] = true;
        $this->seed = $value;

        return $this;
    }

    /**
     * Customize the faker service.
     * @example my_faker
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('locale', $config)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $config['locale'];
            unset($config['locale']);
        }

        if (array_key_exists('seed', $config)) {
            $this->_usedProperties['seed'] = true;
            $this->seed = $config['seed'];
            unset($config['seed']);
        }

        if (array_key_exists('service', $config)) {
            $this->_usedProperties['service'] = true;
            $this->service = $config['service'];
            unset($config['service']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['seed'])) {
            $output['seed'] = $this->seed;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }

        return $output;
    }

}
