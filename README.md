# Vendic_HyvaCheckoutPostcodeNLFormat
A small [Hyva checkout](https://www.hyva.io/hyva-checkout.html) extension that adds validates the Dutch postcode to the correct format using a regular expression.

Note: this extension only validates the format. It doesn't do a lookup to see if the postcode actually exists. For that purpose, use:
1. [Trinos Postcode NL](https://github.com/trinos-nl/magento2-postcode-nl)
2. [Hyva Postcode NL compatibility module](https://gitlab.hyva.io/hyva-checkout/checkout-integrations/magento2-hyva-checkout-postcodenl)

However, it can be used in combination with the above extensions.

## Installation
```bash
composer require vendic/hyva-checkout-postcode-nl-format
```

## Usage
Install the extension, go to the Hyvä checkout and try to enter a Dutch postcode in the wrong format while shipping to the Netherlands. 
You should see an error message that the postcode is in the wrong format (after trying to place the order).
