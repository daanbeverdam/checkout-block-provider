<?php

namespace DaanBeverdam\CheckoutBlockProvider\Model;


use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;

class ConfigProvider implements ConfigProviderInterface
{
    /** @var LayoutInterface  */
    protected $_layout;
    protected $blocks;

    public function __construct(LayoutInterface $layout, $blockIds)
    {
        $this->_layout = $layout;
        $this->blocks = $this->buildBlocks($blockIds);
    }

    public function buildBlocks($blockIds) {
        $blocks = array();
        foreach ($blockIds as $blockName => $blockId) {
            $blocks[$blockName] = $this->constructBlock($blockId);
        }
        return $blocks;
    }

    public function constructBlock($blockId){
        $block = $this->_layout->createBlock('Magento\Cms\Block\Block')
                 ->setBlockId($blockId)->toHtml();
        return $block;
    }

    public function getConfig()
    {
        return $this->blocks;
    }
}