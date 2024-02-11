
<div class="text-center  w-75 mx-auto p-2 m-5">
    <h3>Admissions Form</h3>
    <?php
        echo $this->Form->create('Admissions', array('enctype' => 'multipart/form-data'));
    ?>
    <table align="center" cellpadding="10" >
        <!----- Text ---------------------------------------------------------->
        <tr>
            <td> NAME</td>
            <td><input type="text" name="name" maxlength="30" />
            </td>
        </tr>
        <!----- Select ----------------------------------------------------------->
        <tr>
            <td> Class</td>
            <td>
                <select id="class" name="class" size="3">
                    <option value="1">Class 1</option>
                    <option value="2">Class 2</option>
                    <option value="3">Class 3</option>
                    <option value="4">Class 4</option>
                </select>
            </td>
        </tr>
        <!----- Radio ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
                <input type="radio" name="gender" value="Male" />
                Male
                <input type="radio" name="gender" value="Female" />
                Female
            </td>
        </tr>
        <!----- checkbox ---------------------------------------------------------->
        <tr>
            <td>HOBBIES <br /><br /><br /></td>
            <td>
                <input type="checkbox" name="hobbies[]" value="Drawing" />
                Drawing
                <input type="checkbox" name="hobbies[]" value="Singing" />
                Singing
                <input type="checkbox" name="hobbies[]" value="Dancing" />
                Dancing
                <input type="checkbox" name="hobbies[]" value="Cooking" />
                Cooking

            </td>
        </tr>
        <!----- Textarea ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="address" rows="4" cols="30"></textarea></td>
        </tr>
        <!----- Date -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>
            <td>
                <input type="date" name="dob" id="dob">
            </td>
        </tr>
        <!----- Multiple Select -------------------------------------------------------->
        <tr>
            <td> Languages</td>
            <td>
                <select name="languages[]" id="language" multiple>
                    <option value="Hindi">Hindi</option>
                    <option value="Bengali">Bengali</option>
                    <option value="English">English</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <?php echo $this->Form->file('images', array('type'=>'file')); ?> </td>
        </tr>
        <!----- Submit and Reset ------------------------------------------------->
    </table>
    <?php 
    echo $this->Form->submit('Save',array('class'=>'btn my-3 btn-outline-success mx-2')); 
    echo $this->Form->end();
    
    ?>
</div>