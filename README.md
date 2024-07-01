# Throttle Whitelist
Allows ExpressionEngine site administrators the ability to set a white list specific IP Addresses from the Throttle mechanism within ExpressionEngine.

## Management

White listed IP Addresses are to be included wihtin your ExpressionEngine config file as a simple array. For example:

```php
//throttling
$config['throttling_whitelist'] = [
    '127.0.0.1',
    '184.179.247.80',
];
```