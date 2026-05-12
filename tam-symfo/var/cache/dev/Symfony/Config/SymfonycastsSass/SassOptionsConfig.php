<?php

namespace Symfony\Config\SymfonycastsSass;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SassOptionsConfig 
{
    private $style;
    private $charset;
    private $errorCss;
    private $sourceMap;
    private $embedSources;
    private $embedSourceMap;
    private $loadPath;
    private $quiet;
    private $quietDeps;
    private $stopOnError;
    private $trace;
    private $_usedProperties = [];

    /**
     * The style of the generated CSS: compressed or expanded.
     * @default 'expanded'
     * @param ParamConfigurator|'compressed'|'expanded' $value
     * @return $this
     */
    public function style($value): static
    {
        $this->_usedProperties['style'] = true;
        $this->style = $value;

        return $this;
    }

    /**
     * Whether to include the charset declaration in the generated Sass.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function charset($value): static
    {
        $this->_usedProperties['charset'] = true;
        $this->charset = $value;

        return $this;
    }

    /**
     * Emit a CSS file when an error occurs.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function errorCss($value): static
    {
        $this->_usedProperties['errorCss'] = true;
        $this->errorCss = $value;

        return $this;
    }

    /**
     * Whether to generate source maps.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sourceMap($value): static
    {
        $this->_usedProperties['sourceMap'] = true;
        $this->sourceMap = $value;

        return $this;
    }

    /**
     * Embed source file contents in source maps.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function embedSources($value): static
    {
        $this->_usedProperties['embedSources'] = true;
        $this->embedSources = $value;

        return $this;
    }

    /**
     * Embed source map contents in CSS.
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function embedSourceMap($value): static
    {
        $this->_usedProperties['embedSourceMap'] = true;
        $this->embedSourceMap = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function loadPath(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['loadPath'] = true;
        $this->loadPath = $value;

        return $this;
    }

    /**
     * Don't print warnings.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function quiet($value): static
    {
        $this->_usedProperties['quiet'] = true;
        $this->quiet = $value;

        return $this;
    }

    /**
     *  Don't print compiler warnings from dependencies.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function quietDeps($value): static
    {
        $this->_usedProperties['quietDeps'] = true;
        $this->quietDeps = $value;

        return $this;
    }

    /**
     * Don't compile more files once an error is encountered.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stopOnError($value): static
    {
        $this->_usedProperties['stopOnError'] = true;
        $this->stopOnError = $value;

        return $this;
    }

    /**
     * Print full Dart stack traces for exceptions.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function trace($value): static
    {
        $this->_usedProperties['trace'] = true;
        $this->trace = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('style', $config)) {
            $this->_usedProperties['style'] = true;
            $this->style = $config['style'];
            unset($config['style']);
        }

        if (array_key_exists('charset', $config)) {
            $this->_usedProperties['charset'] = true;
            $this->charset = $config['charset'];
            unset($config['charset']);
        }

        if (array_key_exists('error_css', $config)) {
            $this->_usedProperties['errorCss'] = true;
            $this->errorCss = $config['error_css'];
            unset($config['error_css']);
        }

        if (array_key_exists('source_map', $config)) {
            $this->_usedProperties['sourceMap'] = true;
            $this->sourceMap = $config['source_map'];
            unset($config['source_map']);
        }

        if (array_key_exists('embed_sources', $config)) {
            $this->_usedProperties['embedSources'] = true;
            $this->embedSources = $config['embed_sources'];
            unset($config['embed_sources']);
        }

        if (array_key_exists('embed_source_map', $config)) {
            $this->_usedProperties['embedSourceMap'] = true;
            $this->embedSourceMap = $config['embed_source_map'];
            unset($config['embed_source_map']);
        }

        if (array_key_exists('load_path', $config)) {
            $this->_usedProperties['loadPath'] = true;
            $this->loadPath = $config['load_path'];
            unset($config['load_path']);
        }

        if (array_key_exists('quiet', $config)) {
            $this->_usedProperties['quiet'] = true;
            $this->quiet = $config['quiet'];
            unset($config['quiet']);
        }

        if (array_key_exists('quiet_deps', $config)) {
            $this->_usedProperties['quietDeps'] = true;
            $this->quietDeps = $config['quiet_deps'];
            unset($config['quiet_deps']);
        }

        if (array_key_exists('stop_on_error', $config)) {
            $this->_usedProperties['stopOnError'] = true;
            $this->stopOnError = $config['stop_on_error'];
            unset($config['stop_on_error']);
        }

        if (array_key_exists('trace', $config)) {
            $this->_usedProperties['trace'] = true;
            $this->trace = $config['trace'];
            unset($config['trace']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['style'])) {
            $output['style'] = $this->style;
        }
        if (isset($this->_usedProperties['charset'])) {
            $output['charset'] = $this->charset;
        }
        if (isset($this->_usedProperties['errorCss'])) {
            $output['error_css'] = $this->errorCss;
        }
        if (isset($this->_usedProperties['sourceMap'])) {
            $output['source_map'] = $this->sourceMap;
        }
        if (isset($this->_usedProperties['embedSources'])) {
            $output['embed_sources'] = $this->embedSources;
        }
        if (isset($this->_usedProperties['embedSourceMap'])) {
            $output['embed_source_map'] = $this->embedSourceMap;
        }
        if (isset($this->_usedProperties['loadPath'])) {
            $output['load_path'] = $this->loadPath;
        }
        if (isset($this->_usedProperties['quiet'])) {
            $output['quiet'] = $this->quiet;
        }
        if (isset($this->_usedProperties['quietDeps'])) {
            $output['quiet_deps'] = $this->quietDeps;
        }
        if (isset($this->_usedProperties['stopOnError'])) {
            $output['stop_on_error'] = $this->stopOnError;
        }
        if (isset($this->_usedProperties['trace'])) {
            $output['trace'] = $this->trace;
        }

        return $output;
    }

}
