<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

/**
 * @category   Webeau
 * @package    Webeau_CategoryProductLink
 * @subpackage Block
 * @copyright  Copyright (c) 2016 TechDivision GmbH (http://www.techdivision.com)
 * @version    ${release.version}
 * @link       http://www.techdivision.com/
 * @author     Florian Sydekum <f.sydekum@techdivision.com>
 */

namespace Webeau\CategoryProductLink\Block;

/**
 * Class ProductTab
 * @package Webeau\CategoryProductLink\Block
 */
class ProductTab extends \Magento\Catalog\Block\Adminhtml\Category\Tab\Product
{
    /**
     * @return \Magento\Backend\Block\Widget\Grid\Extended
     */
    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumn(
            'edit',
            [
                'header'           => __('Edit'),
                'type'             => 'action',
                'getter'           => 'getId',
                'actions'          => [
                    [
                        'caption' => __('Edit'),
                        'url'     => [
                            'base'   => 'catalog/product/edit',
                            'params' => ['store' => $this->getRequest()->getParam('store')],
                        ],
                        'field'   => 'id',
                    ],
                ],
                'filter'           => false,
                'sortable'         => false,
                'index'            => 'stores',
                'header_css_class' => 'col-action',
                'column_css_class' => 'col-action',
            ]
        );

        return $this;
    }
}
