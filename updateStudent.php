<?php

$con = mysql_connect('localhost', 'root', 'password');

mysql_select_db('DataTest');

class Students {
    // Properties
    public $studentid;
    public $name;
    public $surname;
  
    // Methods

    function set_studentid($studentid) {
        $this->studentid = $studentid;
      }
      function get_studentid() {
        return $this->studentid;
      }

    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }

    function set_surname($surname) {
        $this->name = $surname;
      }
      function get_surname() {
        return $this->surename;
      }
  }
  
  $studentid = new Student();
  $name = new Student();
  $surname = new Student();
  $studentid->set_id('0001')
  $name->set_name('Ian');
  $surname->set_surname('Browm');
  


if (isset($_POST['submit']) && $_POST['submit'] == 'updateStudent') {
    $updateStudentDetailsQuery = "UPDATE Student_details SET Student_id='$_POST[Student_id]', Student_surname='$_POST[Student_surname]', Student_name='$_POST[Student_name'] WHERE Student_id='$_POST[hidden]'";
    $StudentRecords =mysql_query($Student);

}

$sql = "SELECT * FROM DataTest.Student";
$records=mysql_query($sql);


   
   echo "<table border=1>";
    echo "<tr>";
     echo "<th>ID</th>";
     echo "<th>Surname</th>";
     echo "<th>Name</th>";
    echo "</tr>";

                while($currentStudent = mysql_fetch_assoc($records) ) {
                    echo "<form action=updateUsers.php method=post>";
                    echo "<tr>";
                        echo "<td>" . "<input type=hidden name=Student_id value=" . $currentStudent['Student_id'] . " </td>";
                        echo "<td>" . "<input type=text name=Student_surname value=" . $currentStudent['Student_surname']." </td>";
                        echo "<td>" . "<input type=text name=Student_name value=" .  $currentStudent['Student_name'] . " </td>";

                        echo "<td>" . "<input type='submit' name='updateStudent' value='Update Student' onclick='updateDatabase()'" . " </td>";
                    echo "</tr>";
                    echo "</form>";
                }

    echo "</table>";
?>




    <script>
        function updateDatabase() {

            var xmlhttp;

            xmlhttp=new XMLHttpRequest();

            xmlhttp.open("GET", "updateData.php?Student_surname=" + document.getElementById("Student_surname").value +
             "&Student_name="+document.getElementById("Student_name").value + "&Student_id="+document.getElementById("Student_id").value false);
            xmlhttp.send(null);
        }
    </script>

</body>
