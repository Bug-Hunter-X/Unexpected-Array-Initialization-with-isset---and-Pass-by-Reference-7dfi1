```php
function incrementValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if not set
  }
  $arr[$index]++;
}

$myArr = [1, 2, 3];
incrementValue($myArr, 5);
echo json_encode($myArr);
```