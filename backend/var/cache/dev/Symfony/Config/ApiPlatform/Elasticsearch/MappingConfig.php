<?php

namespace Symfony\Config\ApiPlatform\Elasticsearch;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MappingConfig 
{
    private $index;
    private $type;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function index($value): static
    {
        $this->_usedProperties['index'] = true;
        $this->index = $value;

        return $this;
    }

    /**
     * @default '_doc'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('index', $config)) {
            $this->_usedProperties['index'] = true;
            $this->index = $config['index'];
            unset($config['index']);
        }

        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['index'])) {
            $output['index'] = $this->index;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }

        return $output;
    }

}
