<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'FakerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'InstantiatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'OrmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MongoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'DatabaseResetterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MakeFactoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'MakeStoryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ZenstruckFoundryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $autoRefreshProxies;
    private $faker;
    private $instantiator;
    private $orm;
    private $mongo;
    private $databaseResetter;
    private $globalState;
    private $makeFactory;
    private $makeStory;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * Whether to auto-refresh proxies by default (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#auto-refresh)
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function autoRefreshProxies($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['autoRefreshProxies'] = true;
        $this->autoRefreshProxies = $value;

        return $this;
    }

    /**
     * Configure faker to be used by your factories.
     * @default {"locale":null,"seed":null,"service":null}
     * @deprecated since Symfony 7.4
     */
    public function faker(array $value = []): \Symfony\Config\ZenstruckFoundry\FakerConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->faker) {
            $this->_usedProperties['faker'] = true;
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "faker()" has already been initialized. You cannot pass values the second time you call faker().');
        }

        return $this->faker;
    }

    /**
     * Configure the default instantiator used by your factories.
     * @default {"allow_extra_attributes":false,"always_force_properties":false,"service":null}
     * @deprecated since Symfony 7.4
     */
    public function instantiator(array $value = []): \Symfony\Config\ZenstruckFoundry\InstantiatorConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->instantiator) {
            $this->_usedProperties['instantiator'] = true;
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "instantiator()" has already been initialized. You cannot pass values the second time you call instantiator().');
        }

        return $this->instantiator;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function orm(array $value = []): \Symfony\Config\ZenstruckFoundry\OrmConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->orm) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\ZenstruckFoundry\OrmConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orm()" has already been initialized. You cannot pass values the second time you call orm().');
        }

        return $this->orm;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function mongo(array $value = []): \Symfony\Config\ZenstruckFoundry\MongoConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->mongo) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\ZenstruckFoundry\MongoConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mongo()" has already been initialized. You cannot pass values the second time you call mongo().');
        }

        return $this->mongo;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Configure database reset mechanism.
     * @default {"enabled":true}
     * @deprecated Since zenstruck/foundry 1.38.0: Configuration "zenstruck_foundry.database_resetter" is deprecated and will be removed in 2.0. Use "zenstruck_foundry.orm.reset" or "zenstruck_foundry.mongo.reset" instead.
     * @return \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function databaseResetter(array|bool $value = []): \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['databaseResetter'] = true;
            $this->databaseResetter = $value;

            return $this;
        }

        if (!$this->databaseResetter instanceof \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig) {
            $this->_usedProperties['databaseResetter'] = true;
            $this->databaseResetter = new \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "databaseResetter()" has already been initialized. You cannot pass values the second time you call databaseResetter().');
        }

        return $this->databaseResetter;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function globalState(ParamConfigurator|array $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['globalState'] = true;
        $this->globalState = $value;

        return $this;
    }

    /**
     * @default {"default_namespace":"Factory"}
     * @deprecated since Symfony 7.4
     */
    public function makeFactory(array $value = []): \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->makeFactory) {
            $this->_usedProperties['makeFactory'] = true;
            $this->makeFactory = new \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "makeFactory()" has already been initialized. You cannot pass values the second time you call makeFactory().');
        }

        return $this->makeFactory;
    }

    /**
     * @default {"default_namespace":"Story"}
     * @deprecated since Symfony 7.4
     */
    public function makeStory(array $value = []): \Symfony\Config\ZenstruckFoundry\MakeStoryConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->makeStory) {
            $this->_usedProperties['makeStory'] = true;
            $this->makeStory = new \Symfony\Config\ZenstruckFoundry\MakeStoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "makeStory()" has already been initialized. You cannot pass values the second time you call makeStory().');
        }

        return $this->makeStory;
    }

    public function getExtensionAlias(): string
    {
        return 'zenstruck_foundry';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('auto_refresh_proxies', $config)) {
            $this->_usedProperties['autoRefreshProxies'] = true;
            $this->autoRefreshProxies = $config['auto_refresh_proxies'];
            unset($config['auto_refresh_proxies']);
        }

        if (array_key_exists('faker', $config)) {
            $this->_usedProperties['faker'] = true;
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($config['faker']);
            unset($config['faker']);
        }

        if (array_key_exists('instantiator', $config)) {
            $this->_usedProperties['instantiator'] = true;
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($config['instantiator']);
            unset($config['instantiator']);
        }

        if (array_key_exists('orm', $config)) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\ZenstruckFoundry\OrmConfig($config['orm']);
            unset($config['orm']);
        }

        if (array_key_exists('mongo', $config)) {
            $this->_usedProperties['mongo'] = true;
            $this->mongo = new \Symfony\Config\ZenstruckFoundry\MongoConfig($config['mongo']);
            unset($config['mongo']);
        }

        if (array_key_exists('database_resetter', $config)) {
            $this->_usedProperties['databaseResetter'] = true;
            $this->databaseResetter = \is_array($config['database_resetter']) ? new \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig($config['database_resetter']) : $config['database_resetter'];
            unset($config['database_resetter']);
        }

        if (array_key_exists('global_state', $config)) {
            $this->_usedProperties['globalState'] = true;
            $this->globalState = $config['global_state'];
            unset($config['global_state']);
        }

        if (array_key_exists('make_factory', $config)) {
            $this->_usedProperties['makeFactory'] = true;
            $this->makeFactory = new \Symfony\Config\ZenstruckFoundry\MakeFactoryConfig($config['make_factory']);
            unset($config['make_factory']);
        }

        if (array_key_exists('make_story', $config)) {
            $this->_usedProperties['makeStory'] = true;
            $this->makeStory = new \Symfony\Config\ZenstruckFoundry\MakeStoryConfig($config['make_story']);
            unset($config['make_story']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['autoRefreshProxies'])) {
            $output['auto_refresh_proxies'] = $this->autoRefreshProxies;
        }
        if (isset($this->_usedProperties['faker'])) {
            $output['faker'] = $this->faker->toArray();
        }
        if (isset($this->_usedProperties['instantiator'])) {
            $output['instantiator'] = $this->instantiator->toArray();
        }
        if (isset($this->_usedProperties['orm'])) {
            $output['orm'] = $this->orm->toArray();
        }
        if (isset($this->_usedProperties['mongo'])) {
            $output['mongo'] = $this->mongo->toArray();
        }
        if (isset($this->_usedProperties['databaseResetter'])) {
            $output['database_resetter'] = $this->databaseResetter instanceof \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig ? $this->databaseResetter->toArray() : $this->databaseResetter;
        }
        if (isset($this->_usedProperties['globalState'])) {
            $output['global_state'] = $this->globalState;
        }
        if (isset($this->_usedProperties['makeFactory'])) {
            $output['make_factory'] = $this->makeFactory->toArray();
        }
        if (isset($this->_usedProperties['makeStory'])) {
            $output['make_story'] = $this->makeStory->toArray();
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
