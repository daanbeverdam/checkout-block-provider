define(
    [
        'jquery',
        'ko',
        'Magento_Checkout/js/view/shipping'
    ],
    function(
        $,
        ko,
        Component
    ) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'DaanBeverdam_CheckoutBlockProvider/cms_block'
            },

            initialize: function () {
                var self = this;
                this._super();
            }

        });
    }
);