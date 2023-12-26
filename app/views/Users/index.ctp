<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>


<div class="card m-5 p-5">
    <h2>Users</h2>

    <!-- link to add new users page -->
    <div class='upper-right-opt btn'>
        <?php echo $this->Html->link( '+ New User', array( 'action' => 'addview' ) ); ?>
    </div>

    <table class="table" style='padding:5px;'>
        <!-- table heading -->
        <tr style='background-color:#fff;'>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php
    foreach( $users as $user ){      
        echo "<tr>";
            echo "<td>{$user['User']['id']}</td>";
            echo "<td>{$user['User']['firstname']}</td>";
            echo "<td>{$user['User']['lastname']}</td>";
            echo "<td>{$user['User']['username']}</td>";
            echo "<td>{$user['User']['email']}</td>";
              
            echo "<td class='actions'>";
            echo $this->Html->link( 'Edit', array('action' => 'editview', $user['User']['id']) );
            echo "</td>";
        echo "</tr>";
    }
?>

    </table>
</div>

</html>