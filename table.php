
// sql to create table
$sql = "CREATE TABLE StudentDB (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
gender VARCHAR(10) NOT NULL,
category VARCHAR(15) NOT NULL,
department VARCHAR(30) NOT NULL,
enrollment VARCHAR(20) NOT NULL,
email VARCHAR(50) NOT NULL,
number INT(10) UNSIGNED NOT NULL,
ctype VARCHAR(100) NOT NULL,
complaint VARCHAR(500) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create table
$sql = "CREATE TABLE FacultyDB (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
gender VARCHAR(10) NOT NULL,
category VARCHAR(15) NOT NULL,
department VARCHAR(30) NOT NULL,
empid VARCHAR(20) NOT NULL,
designation VARCHAR(20) NOT NULL,
email VARCHAR(50) NOT NULL,
number INT(10) UNSIGNED NOT NULL,
ctype VARCHAR(100) NOT NULL,
complaint VARCHAR(500) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}