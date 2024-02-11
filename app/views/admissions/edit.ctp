<div class="text-center p-2 m-5">
<h3 class="mb-4">Edit Admission Form</h3>
<?php
    echo $this->Form->create('Admission', array('action' => 'edit'));
    $amm = $this->data['Admission'];
    // print_r($amm);
?>
<table align="center" cellpadding="10" >
    
        <!----- Text ---------------------------------------------------------->
        <tr>
            <td> NAME</td>
            <td><input type="text" name="name" maxlength="30" value="<?php echo $amm['name']; ?>" />
            </td>
        </tr>
        <!----- Select ----------------------------------------------------------->
        <tr>
            <td> Class</td>
            <td>
                <select id="class" name="class" size="3">
                    <option value="1" <?php if('1' == $amm['class']) echo 'selected'; ?>>Class 1</option>
                    <option value="2" <?php if('2' == $amm['class']) echo 'selected'; ?>>Class 2</option>
                    <option value="3" <?php if('3' == $amm['class']) echo 'selected'; ?>>Class 3</option>
                    <option value="4" <?php if('4' == $amm['class']) echo 'selected'; ?>>Class 4</option>
                </select>
            </td>
        </tr>
        <!----- Radio ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
                <input type="radio" name="gender" value="Male" <?php if("Male" == $amm['gender']) echo 'checked'; ?>/>
                Male
                <input type="radio" name="gender" value="Female" <?php if("Female" == $amm['gender']) echo 'checked'; ?>/>
                Female
            </td>
        </tr>
        <!----- checkbox ---------------------------------------------------------->
        <tr>
            <td>HOBBIES <br /><br /><br /></td>
            <td>
                <?php 
                    $languages = explode(', ',$amm['hobbies']); 
                ?>
                <input type="checkbox" name="hobbies[]" value="Drawing" <?php if(in_array("Drawing", $languages)) echo 'checked'; ?> />
                Drawing
                <input type="checkbox" name="hobbies[]" value="Singing" <?php if(in_array("Singing", $languages)) echo 'checked'; ?> />
                Singing
                <input type="checkbox" name="hobbies[]" value="Dancing" <?php if(in_array("Dancing", $languages)) echo 'checked'; ?> />
                Dancing
                <input type="checkbox" name="hobbies[]" value="Cooking" <?php if(in_array("Cooking", $languages)) echo 'checked'; ?> />
                Cooking

            </td>
        </tr>
        <!----- Textarea ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="address" rows="4" cols="30"><?php echo $amm['address']; ?></textarea></td>
        </tr>
        <!----- Date -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>
            <td>
                <input type="date" name="dob" id="dob" value="<?php echo $amm['dob']; ?>">
            </td>
        </tr>
        <!----- Multiple Select -------------------------------------------------------->
        <tr>
            <td> Languages</td>
            <td>
                <?php 
                    $languages = explode(', ',$amm['languages']); 
                ?>
                <select name="languages[]" id="language" multiple>
                    <option value="Hindi" <?php if(in_array("Hindi", $languages)) echo 'selected'; ?>>Hindi</option>
                    <option value="Bengali" <?php if(in_array("Bengali", $languages)) echo 'selected'; ?>>Bengali</option>
                    <option value="English" <?php if(in_array("English", $languages)) echo 'selected'; ?>>English</option>
                </select>
            </td>
        </tr>
        <tr>
        <?php 
        if($amm['images'] != ''){ ?>
            <td>Image: </td>
            <td><img src="<?php echo 'E:/xampp/htdocs/sksaif/app/webroot/img/'. $amm['images']; ?>" width="145" height="100"></td>
            <?php 
        }else{
            echo '<td>No Previous Image </td>';
        }
        ?>
        </tr>
        <tr>
            <td> <?php echo $this->Form->file('images', array('type'=>'file')); ?> </td>
        </tr>
        <!----- Submit and Reset ------------------------------------------------->
    </table>
<?php
    echo $this->Form->submit('Save',array('class'=>'btn  btn-outline-success mx-2')); 
    echo $this->Form->end();
?>
</div>