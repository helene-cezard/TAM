<?php

namespace Symfony\Config\GoogleFonts;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultsConfig 
{
    private $display;
    private $preconnect;
    private $_usedProperties = [];

    /**
     * Default font-display value
     * @default 'swap'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function display($value): static
    {
        $this->_usedProperties['display'] = true;
        $this->display = $value;

        return $this;
    }

    /**
     * Enable preconnect hints for Google Fonts
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function preconnect($value): static
    {
        $this->_usedProperties['preconnect'] = true;
        $this->preconnect = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('display', $config)) {
            $this->_usedProperties['display'] = true;
            $this->display = $config['display'];
            unset($config['display']);
        }

        if (array_key_exists('preconnect', $config)) {
            $this->_usedProperties['preconnect'] = true;
            $this->preconnect = $config['preconnect'];
            unset($config['preconnect']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['display'])) {
            $output['display'] = $this->display;
        }
        if (isset($this->_usedProperties['preconnect'])) {
            $output['preconnect'] = $this->preconnect;
        }

        return $output;
    }

}
