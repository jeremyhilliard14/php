<!-- make an array with all the students in the class. -->

<?php

require_once 'meekrodb.2.3.class.php';
DB::$user = 'x';
DB::$password = 'x';
DB::$dbName = 'phpsandbox';
DB::$host = '127.0.0.1';



$students = array('Tristan', 'Josh', 'Bogdan', 'Lazlo', 'Keith', 'Will', 'Curtis', 'Joe', 'Kochan', 'Patrick', 'Jonathan', 'Jeremy');


// print "<pre>";
// print_r($students);
// print"</pre>";

$numberOfStudents = $_GET['numberOfStudents'];

$students = DB::query("SELECT * FROM students LIMIT ".$numberOfStudents);

print count($students);

for($i=0; $i<$numberOfStudents; $i++){
	print $students[$i]['name'];
	print "<hr />";
}
// foreach($students as $student){
// 	DB::insert('students', array('name'=>$student));
// 	print $query;
// 	print "<br />";
	//mysql_query($query);

//}

// $student = DB::query("SELECT * FROM students WHERE name=%s", "Jeremy");

// print_r($student);
// exit;

// $students2 = array();
// array_push($students2, 'student1'=>'Tristan', 'student2'=>'Josh');

// print "<pre>";
// print_r($students2);
// print"</pre>";






?>

	<a href="students.php?numberOfStudents=<?php print ($numberOfStudents+1) ?>"><button type="submit">Click to add a student</button></a>
	<a href="students.php?numberOfStudents=<?php print ($numberOfStudents-1) ?>"><button type="submit">Click to delete a sutdent</button></a>
	
	





