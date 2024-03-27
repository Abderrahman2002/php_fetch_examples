Database Fetch Script README
Overview
This PHP script (index.php) is designed to retrieve data from a database table named etudiantes using PDO (PHP Data Objects). It fetches data using various fetch modes and prints the results.

Files
fetch_data.php: Main PHP script file.
cnx.php: Database connection file (included in fetch_data.php).
Usage
Ensure that you have a database named etudiantes with relevant data.
Update the database connection details in cnx.php to match your database configuration.
Run the index.php script using a PHP-enabled server or command line.
Fetch Modes
PDO::FETCH_ASSOC: Fetches an associative array indexed by column names.
PDO::FETCH_NUM: Fetches an array indexed by column number.
PDO::FETCH_BOTH: Fetches an array with both associative and numeric indices.
PDO::FETCH_OBJ: Fetches an object with property names that correspond to column names.
Error Handling
The script catches PDOException to handle any database query failures.
Notes
This script serves as a demonstration of different fetch modes in PDO.
Modify the SQL query in fetch_data.php to suit your specific database schema and requirements.
License
This script is provided under the MIT License. See LICENSE for more information.
