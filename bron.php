<?php
        function connect_db(){
			$mysqli_function = new mysqli("localhost","nuryslam","15972","nuryslam");
			return $mysqli_function;
		}

        if(isset($_POST)){
            $startdate = $_POST['start-date'];
            echo $startdate;
            foreach ($_POST['start-time'] as $keys=>$values);
        }
?>