<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'GoogleFonts'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GoogleFontsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $apiKey;
    private $cacheTtl;
    private $useLockedFonts;
    private $fontsDir;
    private $manifestFile;
    private $defaults;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * Google Fonts API key (required for gfonts:search and gfonts:import commands)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function apiKey($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    /**
     * API response cache TTL in seconds (default: 3600 = 1 hour)
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function cacheTtl($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['cacheTtl'] = true;
        $this->cacheTtl = $value;

        return $this;
    }

    /**
     * Use locked/local fonts in production instead of Google Fonts CDN
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function useLockedFonts($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['useLockedFonts'] = true;
        $this->useLockedFonts = $value;

        return $this;
    }

    /**
     * Directory where locked fonts are stored (served by AssetMapper)
     * @default '%kernel.project_dir%/assets/fonts'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function fontsDir($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['fontsDir'] = true;
        $this->fontsDir = $value;

        return $this;
    }

    /**
     * Path to the fonts manifest file
     * @default '%kernel.project_dir%/assets/fonts.json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function manifestFile($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['manifestFile'] = true;
        $this->manifestFile = $value;

        return $this;
    }

    /**
     * @default {"display":"swap","preconnect":true}
     * @deprecated since Symfony 7.4
     */
    public function defaults(array $value = []): \Symfony\Config\GoogleFonts\DefaultsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->defaults) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\GoogleFonts\DefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }

        return $this->defaults;
    }

    public function getExtensionAlias(): string
    {
        return 'google_fonts';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('api_key', $config)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $config['api_key'];
            unset($config['api_key']);
        }

        if (array_key_exists('cache_ttl', $config)) {
            $this->_usedProperties['cacheTtl'] = true;
            $this->cacheTtl = $config['cache_ttl'];
            unset($config['cache_ttl']);
        }

        if (array_key_exists('use_locked_fonts', $config)) {
            $this->_usedProperties['useLockedFonts'] = true;
            $this->useLockedFonts = $config['use_locked_fonts'];
            unset($config['use_locked_fonts']);
        }

        if (array_key_exists('fonts_dir', $config)) {
            $this->_usedProperties['fontsDir'] = true;
            $this->fontsDir = $config['fonts_dir'];
            unset($config['fonts_dir']);
        }

        if (array_key_exists('manifest_file', $config)) {
            $this->_usedProperties['manifestFile'] = true;
            $this->manifestFile = $config['manifest_file'];
            unset($config['manifest_file']);
        }

        if (array_key_exists('defaults', $config)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\GoogleFonts\DefaultsConfig($config['defaults']);
            unset($config['defaults']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['cacheTtl'])) {
            $output['cache_ttl'] = $this->cacheTtl;
        }
        if (isset($this->_usedProperties['useLockedFonts'])) {
            $output['use_locked_fonts'] = $this->useLockedFonts;
        }
        if (isset($this->_usedProperties['fontsDir'])) {
            $output['fonts_dir'] = $this->fontsDir;
        }
        if (isset($this->_usedProperties['manifestFile'])) {
            $output['manifest_file'] = $this->manifestFile;
        }
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults->toArray();
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
