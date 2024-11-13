$sentence = "";
$words = explode(" ", $sentence);
$newSentence = [];

function spinWords(string){

foreach ($words as $word) {

if($str_len ($word)) > 5 {
$wordRev = strrev($word);
array_push($newSentence, $wordRev)
} else {
array_push($snewSentence, $word)
}
return
}
}
$newSentence = implode (" ", $newSentence)