<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Elasticsearch'.\DIRECTORY_SEPARATOR.'MappingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ElasticsearchConfig 
{
    private $enabled;
    private $hosts;
    private $mapping;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function hosts(mixed $value): static
    {
        $this->_usedProperties['hosts'] = true;
        $this->hosts = $value;

        return $this;
    }

    /**
     * @deprecated Since api-platform/core 3.1: The "mapping" option is deprecated. Configure an ApiPlatform\Elasticsearch\State\Options as $stateOptions.
     */
    public function mapping(string $resource_class, array $value = []): \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig
    {
        if (!isset($this->mapping[$resource_class])) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping[$resource_class] = new \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
        }

        return $this->mapping[$resource_class];
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('hosts', $config)) {
            $this->_usedProperties['hosts'] = true;
            $this->hosts = $config['hosts'];
            unset($config['hosts']);
        }

        if (array_key_exists('mapping', $config)) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping = array_map(fn ($v) => new \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig($v), $config['mapping']);
            unset($config['mapping']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['hosts'])) {
            $output['hosts'] = $this->hosts;
        }
        if (isset($this->_usedProperties['mapping'])) {
            $output['mapping'] = array_map(fn ($v) => $v->toArray(), $this->mapping);
        }

        return $output;
    }

}
