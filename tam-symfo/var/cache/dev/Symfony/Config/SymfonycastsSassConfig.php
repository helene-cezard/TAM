<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SymfonycastsSass'.\DIRECTORY_SEPARATOR.'SassOptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonycastsSassConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $rootSass;
    private $binary;
    private $sassOptions;
    private $embedSourcemap;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function rootSass(mixed $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['rootSass'] = true;
        $this->rootSass = $value;

        return $this;
    }

    /**
     * The Sass binary to use
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function binary($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['binary'] = true;
        $this->binary = $value;

        return $this;
    }

    /**
     * @default {"style":"expanded","source_map":true,"embed_source_map":"%kernel.debug%","load_path":[]}
     * @deprecated since Symfony 7.4
     */
    public function sassOptions(array $value = []): \Symfony\Config\SymfonycastsSass\SassOptionsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->sassOptions) {
            $this->_usedProperties['sassOptions'] = true;
            $this->sassOptions = new \Symfony\Config\SymfonycastsSass\SassOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sassOptions()" has already been initialized. You cannot pass values the second time you call sassOptions().');
        }

        return $this->sassOptions;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @deprecated Since symfonycast/sass-bundle 0.4: Option "embed_sourcemap" at "symfonycasts_sass" is deprecated. Use "sass_options.embed_source_map" instead".
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function embedSourcemap($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['embedSourcemap'] = true;
        $this->embedSourcemap = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'symfonycasts_sass';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('root_sass', $config)) {
            $this->_usedProperties['rootSass'] = true;
            $this->rootSass = $config['root_sass'];
            unset($config['root_sass']);
        }

        if (array_key_exists('binary', $config)) {
            $this->_usedProperties['binary'] = true;
            $this->binary = $config['binary'];
            unset($config['binary']);
        }

        if (array_key_exists('sass_options', $config)) {
            $this->_usedProperties['sassOptions'] = true;
            $this->sassOptions = new \Symfony\Config\SymfonycastsSass\SassOptionsConfig($config['sass_options']);
            unset($config['sass_options']);
        }

        if (array_key_exists('embed_sourcemap', $config)) {
            $this->_usedProperties['embedSourcemap'] = true;
            $this->embedSourcemap = $config['embed_sourcemap'];
            unset($config['embed_sourcemap']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['rootSass'])) {
            $output['root_sass'] = $this->rootSass;
        }
        if (isset($this->_usedProperties['binary'])) {
            $output['binary'] = $this->binary;
        }
        if (isset($this->_usedProperties['sassOptions'])) {
            $output['sass_options'] = $this->sassOptions->toArray();
        }
        if (isset($this->_usedProperties['embedSourcemap'])) {
            $output['embed_sourcemap'] = $this->embedSourcemap;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
