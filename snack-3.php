$items = [false,1,0,1,2,0,1,3,"a"];
$result = [];

function moveZeros(array $items): array {
$others = [];
$zeros = [];

foreach ($items as $item){
if(is_numeric($item) && floatval($item) == 0){
array_push($zeros, 0);
} else {
array_push($others, $item);
}
}

return $result = array_merge($others, $zeros);
}