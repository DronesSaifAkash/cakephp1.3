<div class="text-center  w-75 mx-auto p-2 m-5">
    <div class="col-sm-1">
    </div>
    <table class="table text-center">
        <colgroup>
            <col span="1" style="background-color: #D6EEEE; width:3%; ">
        </colgroup>
        <thead>
            <tr>
                <th>#</th>
                <th>Name </th>
                <th>Class</th>
                <th>Gender </th>
                <th>Hobbies</th>
                <th>Address</th>
                <th>DOB</th>
                <th>Languages</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($admissions as $k => $adds) {
                ?>
                <tr>
                    <td>
                        <?php echo $k + 1; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['name']; ?>
                    </td>
                    <td>
                        <?php echo 'Class ' . $adds['Admission']['class']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['gender']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['hobbies']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['address']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['dob']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['languages']; ?>
                    </td>
                    <td>
                        <?php echo $adds['Admission']['images']; ?>
                    </td>
                    <td>
                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $adds['Admission']['id']), array( 'class'=>'btn-sm text-decoration-none'));?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>