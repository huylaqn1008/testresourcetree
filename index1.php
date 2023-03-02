<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="author" content="nhom1">
        <link href="/LAB2/site.css" rel="stylesheet">
        <title>OOP PHP</title>
    </head>
    <body>
        <div id="wrapper">
            <?php IDEA:
                require_once("userclass.php");
                $nguyenanh = new User('nguyen anh','dinhanhvnn@gmail.com');

                echo "<h2>---User info---</h2>";
                echo "UserID: ".$nguyenanh -> GetUserID()."<br/>";
                echo "UserName: ".$nguyenanh -> GetUserName()."<br/>";

                $nguyenanhmore = new User("Nguyen Van A", "youremail@gmail.com");
                echo "<h2>---More user---</h2>";
                echo "UserID: ".$nguyenanhmore -> GetUserID()."<br/>";
                echo "UserName: ".$nguyenanhmore -> GetUserName()."<br/>";
            ?>
        </div>
        <footer>
            &#169; 2023 - Nhóm 1 - HUTECH
        </footer>
    </body>
</html>