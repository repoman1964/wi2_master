<?php
$servername = "localhost";
$username = "assmunch";
$password = "assmunch";
$dbname = "mlmleads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO headlines (id, headline)
VALUES
('6', 'Formula #6: For the [Prospect In Pain] How To [Live The Promise] Starting With [A Low Magnitude Change, Activity or Situation]'),
('7', 'Formula #7: If You [Can/Are/Have] then You Can [Have an Awesome Outcome]'),
('8', 'Formula #8: [Secrets/Tricks/Strategies/Techniques/Systems] of a [Prospect who is living the Promise]'),
('9', 'Formula #9: [WARNING/Alert/Attention/Be Advised]: [A Specific Kind of Prospect] will [Experience/Become] [A Situation even MORE painful than the one they are currently in]'),
('10', 'Formula #10: [Give Me/Show Me] [A Situation/Amount of Activity] and I\'ll [Deliver You to the Promise Land/Prevent You From Experiencing More Pain]'),
('11', 'Formula #11: [Number or Statistics] of a [Type of Prospect] are [Now Living in the Promise Land] [despite] [An Initial Negative Reaction to the Premise]'),
('12', 'Formula #12: [Number] of ways to [Reach the Shore of the Promise Land] while [not increasing pain/effort/anxiety/loss]'),
('13', 'Formula #13: How To Get [Result] [Quickly] [Without Risk]'),
('14', 'Formula #14: How To [Eliminate Specific Pain] [Without More Pain]'),
('15', 'Formula #15: If [Specific Emotional Hot Button Situation Is Happening], Then [Worst Fear Might Be True]'),
('16', 'Formula #16: What To Do If [Specific Hot Button Situation]'),
('17', 'Formula #17: 10 Mistakes Most [Customer Description] Make [In Situation] – And How To Avoid Them'),
('18', 'Formula #18: Why [Common-Sense Approach] Doesn’t Work… And What To Do About It'),
('19', 'Formula #19: How To [Turn Problem] [Into Benefit]'),
('20', 'http://blog.myleadsystempro.com/19-proven-formulas-for-high-converting-headlines#')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>