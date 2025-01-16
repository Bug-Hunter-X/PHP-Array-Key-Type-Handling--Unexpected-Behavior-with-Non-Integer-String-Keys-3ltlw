The best solution is to consistently use integer or string keys for your PHP arrays.  If you are receiving array keys from external sources, strictly type-check and sanitize the data before using them as array keys.  For example:

```php
$myArray = [];
$key = 1.5;
$sanitizedKey = (string)$key; // Explicitly convert to string
$myArray[$sanitizedKey] = "value1";

$key = "1.5";
$myArray[$key] = "value2";

echo count($myArray); // Outputs 2 (expected)
echo $myArray["1.5"]; // Outputs "value2" (expected)
```

This approach guarantees consistent array behavior and prevents unexpected overwrites due to implicit type conversions.  Always favor explicit type handling for clarity and robustness.