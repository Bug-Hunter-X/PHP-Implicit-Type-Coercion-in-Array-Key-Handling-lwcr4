```php
<?php
function increment_array_value(&$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; 
  }
  $arr[$key]++;
}

$my_array = [];
increment_array_value($my_array, 'count');
echo "Count: " . $my_array['count'] . "\n";

increment_array_value($my_array, 10);
echo "Value at index 10: " . $my_array[10] . "\n";
?>
```