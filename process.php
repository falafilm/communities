<?php include 'connect.php'; ?>

<?php 

    // print_r($_POST);
    $images = $_POST['images'];
    $problem = $_POST['problem'];
    $location = $_POST['location'];
    $name = $_POST['name'];

    mysqli_query($connect, "INSERT INTO communities (images, problem, location, name)
                            VALUE ('$images', '$problem', '$location', '$name')");

    if(mysqli_affected_rows($connect)>0){
        echo '<p>Success!</p>';
        echo '<a>ข้อมูลถูกเก็บลงฐานข้อมูลเรียบร้อยแล้ว<br><br></a>';
        echo '<a href="index.html">กลับไปยังหน้าหลัก</a>';

    }else{
        echo "Not Success";
        echo mysqli_error($connect);
    }
?>