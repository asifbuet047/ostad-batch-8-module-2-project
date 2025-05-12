<?php

$score = 0;
echo "------Welcome to the Quiz App!------\n";
echo "First, question: What is the capital of France?\n";
echo "1. Berlin\n";
echo "2. Madrid\n";
echo "3. Paris\n";
echo "Your answer: ";
$answer = trim(fgets(STDIN));
if ($answer == 3) {
    $score++;
    echo "Correct!\n";
} else {
    echo "Wrong! The correct answer is 3. Paris.\n";
}
echo "Second question: What is 3 + 2?\n";
echo "1. 4\n";
echo "2. 5\n";
echo "3. 6\n";
echo "Your answer: ";
$answer = trim(fgets(STDIN));
if ($answer == 2) {
    $score++;
    echo "Correct!\n";
} else {
    echo "Wrong! The correct answer is 2. 5.\n";
}

echo "Third question: What is the smallest planet in our solar system?\n";
echo "1. Earth\n";
echo "2. Mercury\n";
echo "3. Mars\n";
echo "Your answer: ";
$answer = trim(fgets(STDIN));
if ($answer == 2) {
    $score++;
    echo "Correct!\n";
} else {
    echo "Wrong! The correct answer is 2. Mercury.\n";
}

echo "Your total score is: $score out of 3\n";
echo "Thank you for playing the Quiz App!\n";
