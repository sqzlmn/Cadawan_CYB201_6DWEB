<?php
// Adriane Louis S. Cadawan
// CYB201
//15.01.2026

$Sad = "I am Sad";
$Excited = "I am Excited!";
$Name = "Adriane Louis Cadawan";
$Sentence = "This Sentence has 7 Words and contains 52 Characters.";
$left_space_str = "   Hello";
$right_space_str = "World   ";
$both_space_str = "   Cut me!   ";
$original = "I love PHP!";
$str_replace_output = str_replace("PHP", "Coding", $original);
$str_ireplace_output = str_ireplace("php", "Cybersecurity", $original);
  
$repeat_str = "Hallelujah! ";

$Contains = "Hello World, Kamusta and Welcome to PHP!";
$str_pos = strpos($Contains, "World"); 
$word_wrap = wordwrap($Sentence, 15, "<br>\n"); 
$substring = substr($Name, 0, 7); 
$mbstrtoupper = mb_strtoupper($Sentence);
$mbstrtolower = mb_strtolower($Sentence);
$mbstrlength = mb_strlen($Sentence);



$uppercase = strtoupper($Excited);
$capitalize = ucfirst($Name);
$lowercase = strtolower($Sad);
$char_count = strlen($Sentence);
$word_count = str_word_count($Sentence);
$str_contains = str_contains($Contains, "PHP") ? "Yes" : "No";
$str_starts_with = str_starts_with($Contains, "Hello") ? "Yes" : "No";
$str_ends_with = str_ends_with($Contains, "Functions.") ? "Yes" : "No";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Built-in Functions</title>
    <style>

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6;
    color: #333;
    display: flex;
    justify-content: center;
    padding: 40px;
}

table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden; 
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #2c3e50;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

th {
    padding: 15px 20px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-size: 0.9rem;
}

td {
    padding: 12px 20px;
    border-bottom: 1px solid #edf2f7;
}


tbody tr:hover {
    background-color: #e2e8f0;
    transition: background-color 0.3s ease;
    cursor: default;
}


.container {
    max-width: 800px;
    margin: 0 auto; 
    padding: 20px;
}

table {
    display: table; 
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 40px; 
    background-color: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}

th {
    background-color: #2c3e50;
    color: white;
    padding: 12px;
    text-align: left;
}

td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

caption {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: left;
    color: #2c3e50;
}

    </style>
</head>
<body>

<div class="container">
  <table class="styled-table">
    <caption>Changing the Case of Characters</caption>
    <thead>
      <tr>
        <th>Function</th>
        <th>Output</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lowercase</td>
        <td><?php echo $lowercase; ?></td>
      </tr>
      <tr>
        <td>Uppercase</td>
        <td><?php echo $uppercase; ?></td>
      </tr>
      <tr>
        <td>Capitalize</td>
        <td><?php echo $capitalize; ?></td>
      </tr> 
    </tbody>
  </table>
  <table class="styled-table">
    <caption>Counting Characters and Words</caption>
    <thead>
      <tr>
        <th>Function</th>
        <th>Output</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Number Of Characters</td>
        <td><?php echo $char_count; ?></td>
      </tr>
      <tr>
        <td>Number of Words</td>
        <td><?php echo $word_count; ?></td>
      </tr>
    </tbody>    
  </table>
  <table class="styled-table">
  <caption>Removing and Replacing Characters</caption>
  <thead>
    <tr>
      <th>Function</th>
      <th>Output</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Remove whitespaces from left (ltrim)</td>
      <td>"<?php echo ltrim($left_space_str); ?>"</td>
    </tr>
    <tr>
      <td>Remove whitespaces from right (rtrim)</td>
      <td>"<?php echo rtrim($right_space_str); ?>"</td>
    </tr>
    <tr>
      <td>Remove whitespace from both (trim)</td>
      <td>"<?php echo trim($both_space_str); ?>"</td>
    </tr>
    <tr>
      <td>String replace (case-sensitive)</td>
      <td><?php echo $str_replace_output; ?></td>
    </tr>
    <tr>
      <td>String ireplace (case-insensitive)</td>
      <td><?php echo $str_ireplace_output; ?></td>
    </tr>
    <tr>
      <td>String Repeat</td>
      <td><?php echo str_repeat($repeat_str, 3); ?></td>
    </tr>
  </tbody>
</table>

  <table class="styled-table">
  <caption>Other Built-in Functions</caption>
  <thead>
    <tr>
      <th>Function</th>
      <th>Output</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Checks is a substring is found in a string, returns true/false.</td>
      <td>"<?php echo $str_contains; ?>"</td>
    </tr>
    <tr>
      <td>Check is string starts with substring, returns true/false.</td>
      <td>"<?php echo $str_starts_with; ?>"</td>
    </tr>
    <tr>
      <td>Checks if string ends with substring, returns true/false.</td>
      <td>"<?php echo $str_ends_with; ?>"</td>
    </tr>
    <tr>
      <td>Replaces the substring $old with the one in $new (case-sensitive).</td>
      <td><?php echo $str_replace_output; ?></td>
    </tr>
    <tr>
      <td>	Replaces the substring $old with the one in $new (case-insensitive)</td>
      <td><?php echo $str_ireplace_output; ?></td>
    </tr>
    <tr>
      <td>String Position:Finds the index of "World" in string.</td>
      <td>Position: <?php echo $str_pos; ?></td>
    </tr>    
    <tr>
      <td>Returns string with all characters in uppercase.</td>
      <td><?php echo $mbstrtoupper; ?></td>
    </tr>   
    <tr>
      <td>Returns string with all characters in lowercase.</td>
      <td><?php echo $mbstrtolower; ?></td>
    </tr> 
    <tr>
      <td>Returns the number of characters in the string.</td>
      <td><?php echo $mbstrlength; ?></td>
    </tr> 

    <tr>
      <td>	Returns characters from the position specified in $offset to the end of the string. If the $characters parameter is used, it specifies the number of  characters to return after $offset</td>
      <td><?php echo $substring; ?></td>
    </tr>
  </tbody>
</table>
</div>

    
</body>
</html>