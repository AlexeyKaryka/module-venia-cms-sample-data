<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\VeniaCmsSampleData\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\CatalogSampleData\Model\Category
     */
    private $category;

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \MagentoEse\CatalogSampleData\Model\Category $category
     * @param \MagentoEse\CmsSampleData\Model\Page $page
     * @param \MagentoEse\CmsSampleData\Model\Block $block
     */
    public function __construct(
        //\MagentoEse\CatalogSampleData\Model\Category $category,
        \MagentoEse\VeniaCmsSampleData\Model\Page $page,
        \MagentoEse\VeniaCmsSampleData\Model\Block $block
    ) {
        //$this->category = $category;
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        //$this->category->install(['MagentoEse_VeniaCmsSampleData::fixtures/categories.csv']);
        $this->page->install(['MagentoEse_VeniaCmsSampleData::fixtures/pages/pages.csv']);
        $this->block->install(
            [
                'MagentoEse_VeniaCmsSampleData::fixtures/blocks/pages_static_blocks.csv',
            ]
        );
    }
}
