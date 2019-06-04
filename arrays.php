<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

//Print every array element in a new line.

$food =  ["Burger","Pizza","Muffin","gulab jamun"];

/*Printing using the echo*/
echo "{$food[0]} <br>";
echo "{$food[1]} <br>";
echo "{$food[2]} <br>";
echo "{$food[3]} <br>";


/*Printing using the Print_r() function*/
echo '<pre>'; 
print_r($food); 
echo '</pre>';

/*Printing using the loop*/

$i = 0;
while ($i <sizeof($food)){
    
    echo "{$food[$i]} <br>";
    $i++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc =[
    'burger' =>'main course',
    'pizza' => 'appetizer',
    'muffin' => 'main dish',
    'gulab jamun' => 'dessert'
];


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo 'burger | '. $food_assoc['burger'].'<br>' ;
echo 'pizza | '. $food_assoc['pizza'] .'<br>' ;
echo 'muffin | '. $food_assoc['muffin'] .'<br>' ;
echo 'gulab jamun | '. $food_assoc['gulab jamun'] .'<br>' ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/



$food_assoc =[
    'burger' => [
                    'type'=>'main course',
                    'origin'=>'USA'                    
                    ],
    'pizza' => [
                    'type'=>'appetizer',
                    'origin'=>'Italy'                    
                    ],
    'muffin' => [
                    'type'=>'main dish',
                    'origin'=>'UK'                    
                    ],
    'gulab jamun' => [
                    'type'=>'dessert',
                    'origin'=>'India'                    
                    ]
];

echo 'burger | '.$food_assoc['burger']['type'].' | '.$food_assoc['burger']['origin'] .'<br>';
echo 'pizza | '.$food_assoc['pizza']['type'].' | '.$food_assoc['pizza']['origin'] .'<br>';
echo 'muffin | '.$food_assoc['muffin']['type'].' | '.$food_assoc['muffin']['origin'] .'<br>';
echo 'gulab jamun | '.$food_assoc['gulab jamun']['type'].' | '.$food_assoc['gulab jamun']['origin'] .'<br>';


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>

<html>
<style>
table,th,td {
  border: 1px solid black;
  border-collapse: collapse;
    text-align: center;
}
</style>
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>burger</td>
    <td><?php echo $food_assoc['burger']['type'] ?> </td>
    <td><?php echo $food_assoc['burger']['origin'] ?></td>
  </tr>
  <tr>
    <td>pizza</td>
   <td><?php echo $food_assoc['pizza']['type'] ?> </td>
    <td><?php echo $food_assoc['pizza']['origin'] ?></td>
  </tr>
   <tr>
    <td>muffin</td>
   <td><?php echo $food_assoc['muffin']['type'] ?> </td>
    <td><?php echo $food_assoc['muffin']['origin'] ?></td>
  </tr>
   <tr>
    <td>gulab jamun</td>
   <td><?php echo $food_assoc['gulab jamun']['type'] ?> </td>
    <td><?php echo $food_assoc['gulab jamun']['origin'] ?></td>
  </tr>
</table>
    </html>
