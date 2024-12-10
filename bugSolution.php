```php
function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    return; // Handle out-of-bounds index
  }
  $arr[$index]++;
}

$myArr = [1, 2, 3];
incrementValue($myArr, 5);
echo json_encode($myArr); // Output: [1,2,3]

//Alternative solution using array_key_exists which is more explicit
function incrementValue2(array &$arr, int $index): void {
  if (array_key_exists($index, $arr)){
    $arr[$index]++;
  }
}
$myArr2 = [1,2,3];
incrementValue2($myArr2, 5); //does not modify $myArr2
echo json_encode($myArr2); //Output: [1,2,3]
```