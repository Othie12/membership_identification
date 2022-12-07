<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parousia International Ministries</title>
    <link rel="stylesheet" href="pmi.css">
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <main>

        <?php
        include "db.php";
    if (isset($_GET['s_sub'])) {
        $id = $_GET['src'];
        $stmt = $conn->prepare('SELECT id, fname, mname, lname, dob, reg_date, sex, church, tel, email, nationality, post FROM member WHERE id = :id');
        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch();
        $count = $stmt->rowcount();
        if($count > 0){
            $fname = $row['fname'];
            $mname = $row['mname'];
            $lname = $row['lname'];
            $dob = $row['dob'];
            $regDate = $row['reg_date'];
            $sex = $row['sex'];
            //$church = $row['church'];
            $church = str_replace('_', ' ', $row['church']);

            $tel = $row['tel'];
            $nationality = $row['nationality'];
            $post = $row['post'];

            echo '<table class="col-6">
            <tr>
                <th>FIRST NAME</th>
                <td>'.$fname.'</td>
            </tr>
            <tr>
                <th>MIDDLE NAME</th>
                <td>'.$mname.'</td>
            </tr>
            <tr>
                <th>LAST NAME</th>
                <td>'.$lname.'</td>
            </tr>
            <tr>
                <th>DOB</th>
                <td>'.$dob.'</td>
            </tr>
            <tr>
                <th>REGISTRATION DATE</th>
                <td>'.$regDate.'</td>
            </tr>
            <tr>
                <th>SEX</th>
                <td>'.$sex.'</td>
            </tr>
            <tr>
                <th>CHURCH</th>
                <td>'.$church.'</td>
            </tr>
            <tr>
                <th>CONTACT</th>
                <td>'.$tel.'</td>
            </tr>
            <tr>
                <th>NATIONALITY</th>
                <td>'.$nationality.'</td>
            </tr>
            <tr>
                <th>POST</th>
                <td>'.$post.'</td>
            </tr>
        </table>';
        }else{
            echo '<h3>Doesnt exist...</h3>';
        }

    }

    ?>
<!--
    <article class="col-6">
        <h2 align="center">WHAT YOU ARE REQUIRED TO DO</h2>
        <div class="col-5">
            <dl>
                <dt>Searching</dt>
                <dd>You have to provide the registration or id number of the person you are trying to search for
                    and then the system will check if they exist.
                </dd>
            </dl>
        </div>
        <div class="col-5">
            <dl>
                <dt>Searching</dt>
                <dd>You have to provide the registration or id number of the person you are trying to search for
                    and then the system will check if they exist.
                </dd>
            </dl>
        </div>
    </article>
-->
    </main>  
    <footer>
        <?php include "footer.php"?>
    </footer>

</body>
</html>