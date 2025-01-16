In PHP, a common yet easily overlooked error arises when dealing with array keys that are not strictly integers or strings.  Consider this scenario:

```php
$myArray = [];
$myArray[1.5] = "value1";
$myArray["1.5"] = "value2";

echo count($myArray); // Outputs 2 (unexpected)
echo $myArray[1.5];   // Outputs "value2" (unexpected)
```

PHP's loose typing allows keys like 1.5 to be treated as strings.  The floating-point key 1.5 is converted to the string "1.5", leading to unexpected overwriting and inaccurate `count()` results.  This can cause subtle bugs and unpredictable behavior, especially in larger applications.