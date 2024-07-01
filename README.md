# Throttle Whitelist
Allows ExpressionEngine site administrators the ability to set a white list specific IP Addresses from the Throttle mechanism within ExpressionEngine.

## Features
1. Allow blanket IP based exclusion
2. Configure to ignore logged in users from being throttled

## Management

White listed IP Addresses are to be included wihtin your ExpressionEngine config file as a simple array. For example:

```php
//throttling
$config['throttling_whitelist'] = [
    '127.0.0.1',
    '184.179.247.80',
];

$config['throttle_ignore_logged_in'] = 'y';
```