<?php
//Array with random names
$a[] = "Zoe";  
$a[] = "Basil";  
$a[] = "Keely";   
$a[] = "Latashia";   
$a[] = "Blanche"; 
$a[] = "Heath"; 
$a[] = "Benton"; 
$a[] = "Na"; 
$a[] = "Johnny"; 
$a[] = "Cathy"; 
$a[] = "Adriene";  
$a[] = "Emilio"; 
$a[] = "Dessie";  
$a[] = "Justa"; 
$a[] = "Velia"; 
$a[] = "Granville";   
$a[] = "Georgeann"; 
$a[] = "Bettye"; 
$a[] = "Eula"; 
$a[] = "Katly";  
$a[] = "Alva"; 
$a[] = "Barbar";  
$a[] = "Helen"; 
$a[] = "Edythe"; 
$a[] = "Laurel"; 
$a[] = "Edris"; 
$a[] = "Ailene"; 
$a[] = "Lacie"; 
$a[] = "Rodney"; 
$a[] = "Clement";   
$a[] = "Giuseppe";  
$a[] = "Gayle"; 
$a[] = "Windy"; 
$a[] = "Larraine";   
$a[] = "Laura"; 
$a[] = "Adrian"; 
$a[] = "Twila"; 
$a[] = "Assunta";  
$a[] = "Shonda"; 
$a[] = "Nicolas"; 
$a[] = "Kimbery"; 
$a[] = "Florida"; 
$a[] = "Kaley"; 
$a[] = "Ivan"; 
$a[] = "Eleanora";   
$a[] = "Leota"; 
$a[] = "Jenny"; 
$a[] = "Princess";   
$a[] = "Georgette"; 
$a[] = "Shaunta"; 


//Get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//Lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

//Output "No suggestion" if no hint was found or output correct values
echo $hint === "" ? "No suggestion" : $hint;
?> 