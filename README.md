# CheckoutBlockProvider

A Magento 2 module that provides a CMS block to the checkout template.

## Installation

Install the module by using composer.

```
composer require daanbeverdam/checkout-block-provider
```

Or, if you prefer, install the module manually by downloading this repo as a zip and extracting it in `app/code/DaanBeverdam/CheckoutBlockProvider`. Then enable the module and run `setup:upgrade`.

```
bin/magento module:enable DaanBeverdam_CheckoutBlockProvider
bin/magento setup:upgrade
```

## Configuration

By default, the module looks for a CMS block with identifier `checkout_block`. You'll have to create this block yourself, or change the `$blockId` argument to an already existing block in the `etc/frontend/di.xml` file. 

The block will be shown before the first step in the checkout. If you want to move it down, you'll have to change the `sortOrder` value in the `view/frontend/layout/checkout_index_index.xml` file.

For a more in depth write-up on this module check out [this post](https://www.daanbeverdam.com/adding-a-static-cms-block-to-the-magento-2-checkout/) on my personal website.
