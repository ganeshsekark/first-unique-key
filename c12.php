<html>
<title> First Unique Character</title>
<head>
<body>

</body>

<?php 

$NO_OF_CHARS = 256; 
$count=array_fill(0, 200, 0); 
  

function getCharCountArray($str)  
{ 
    global $count; 
    for ($i = 0;  
         $i < strlen($str); $i++) 
        $count[ord($str[$i])]++; 
} 
  

function firstNonRepeating($str) 
{ 
    global $count; 
    getCharCountArray($str); 
    $index = -1; 
    for ($i = 0;  
         $i < strlen($str); $i++) 
    { 
        if ($count[ord($str[$i])] == 1) 
        { 
            $index = $i; 
            break; 
        }  
    }  
      
return $index; 
} 
  
// Driver code 
$str = "abcababa"; 
$index = firstNonRepeating($str); 
if($index == -1) 
echo "Either all characters are" .  
     " repeating or string is empty"; 
else
echo "First non-repeating ".  
            "character is ". 
               $str[$index]; 
  
// This code is contributed by mits 
?> 
</html>