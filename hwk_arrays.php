<?php


/*Create an array of people. Each person should have a 'name', 'phone_number', and 'address'. 
The 'name' should be an associative array with keys 'first' and 'last'. Make sure there are at 
least 3 people in the array.*/

$people = [

    "1." =>["first" => "K", "last" => "Jones", "phone" => "210-333-1111", "address" => "123 Somewhere Dr. SA, TX 12345"],
    "2." =>["first" => "Jon", "last" => "Jones", "phone" => "210-222-5555", "address" => "222 Holly Ave. SA, TX 78852"],
    "3." =>["first" => "Bill", "last" => "Bob", "phone" => "210-444-999", "address" => "333 Maple Street SA,TX 78852"]

];
 

foreach($people as $key => $person) 
{
    echo $key . ' ' . $person["first"] . ' ' . $person["last"] . PHP_EOL;
    echo "Phone: " . $person["phone"] . PHP_EOL;
    echo "Address: " . $person["address"] . PHP_EOL;
    echo " ----------- " . PHP_EOL;
}


    
/*Create an array that represents a quiz. In the top level array, the keys should be the question numbers 
and the values should be an associative array. The associative array should have the
 following keys: 'question', 'answers', 'correct_answer'. The 'question' is a string.
  The 'answers' is as associative array with alphabetical keys and string values. 
  The 'correct_answer' is a string representing the letter of the correct answer. 
  Make sure your quiz has at least 3 questions.

Loop through the array and produces the following output:

1. Question goes here.

   a. Answer one.
   b. Answer two.
  *c. Answer three. (Star before answer denotes that it is correct)
   d. Answer four.
*/
$pop_quiz = [
    "1." => ["question" => "which of the following movies has to do with time travel?", 
            "answers" => ["a." => "Batman", "b." => "Twilight", "c." => "Back to the future", "d." => "none of the above"],
             "correct_choice" => "c"],
    "2." => ["question" => "which is not a Stephen King book?", 
            "answers" => ["a." => "The Shining", "b." => "Carrie", "c." => "Twilight" , "d." => "It"],
             "correct_choice" => "c"],
    "3." => ["question" => "Which is not a disney cartoon?", 
            "answers" => ["a." => "Aladdin", "b." => "The Lion King", "c." => "Shrek", "d." => "The Incredibles"],
            "correct_choice" => "c"]
    ];



foreach($pop_quiz as $key => $value) 
{
    echo $key . ' ' . $value["question"] . PHP_EOL;
    $correct_answer = $value["correct_choice"];
}      
foreach ($value["answers"] as $letter => $answerContent) 
{
  if($correct_answer == $value["correct_choice"]) {
    echo "*" . $letter . $answerContent . PHP_EOL;
  } else {
    echo $letter . $answerContent . PHP_EOL;
  }
}


?>
   
