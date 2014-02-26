#php-client

##Php Wrapper for Veespo Api

install with composer TODO

###Generate a token with Api

```php
$token =  Veespo\Api::getToken(array(
  'api_path' => 'http://production.veespo.com',
  'category' => 'THE ID OF CATEGORY',
  'api_key'  => 'THE API KEY OF CATEGORY',
  'user'     => 'THE USER ID'
));

```

###Call the Api with token

```php
$api = new Veespo\Api(array(
  'api_path' => 'http://production.veespo.com',
  'token'    => $token
));

print_r($api->get('v1/info/category/cities/targets',array()));

```
