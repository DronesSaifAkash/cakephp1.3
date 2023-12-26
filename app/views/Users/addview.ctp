<!-- File: /app/views/posts/edit.ctp -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<div class="m-5 mx-auto text-center container card">

<?php
     echo $form->create("Users",array('action'=>'add','name'=>'form','id'=>'form'));
?>
<center>
    <h1>Add Post</h1>
    <hr>
    <table class=" "> 
        <tr>
            <th>
                Firstname
            </th>
            <td>
                <input type="text" class="form-control" name="firstname" id="firstname" >
            </td>
        </tr>
        <tr>
            <th>
                lastname
            </th>
            <td>
                <input type="text" class="form-control" name="lastname" id="lastname" >
            </td>
        </tr>
        <tr>
            <th>
                Email
            </th>
            <td>
                <input type="text" class="form-control" name="email" id="email" >
            </td>
        </tr>
        <tr>
            <th>
                Username
            </th>
            <td>
                <input type="text" class="form-control"  name="username" id="username" >
            </td>
        </tr>
        <tr>
            <th>
                Password
            </th>
            <td>
                <input type="text" class="form-control" name="password" id="password" >
            </td>
        </tr>
        
    </table>
    <input type="submit" value="Submit" class="btn btn-success my-3">
                <!-- <?php 
                echo $form->submit();
                ?> -->
</center>
    

    <?
    
   echo $form->end();
?>
</div>