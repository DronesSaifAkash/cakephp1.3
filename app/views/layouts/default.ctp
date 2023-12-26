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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
      echo $html->css('style.css');     
?>

</head>

<body>
<div id="page">
	
	<div id="menu mb-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cakephp1.3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php echo $this->Html->link('Home', '/posts', array('class' => 'nav-link active')); ?>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                        <?php echo $this->Html->link("Add Post", array('action' => 'add'),array( 'class' => 'nav-link')); ?>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                        <?php echo $this->Html->link("View All", array('action' => '/view_all'),array( 'class' => 'nav-link')); ?>
                    </li>
                </ul>
                <?php 
                    echo $this->Form->create('Posts', array('action' => 'index', 'class'=>'mb-3 d-flex ' )); 
                    echo $this->Form->input('Search', array( 'name'=>'srch' , 'class'=> 'form-control me-2', 'label' => false )); 
                    echo $this->Form->submit('Search',array('class'=>'btn  btn-outline-success mx-2')); 
                    echo $this->Form->end(); 
                ?>
            </div>
        </div>
    </nav>
    </div>
	<?php
                echo $content_for_layout;
                ?>
	<div class="footer-border"></div>
	<div align="left" style="color:#ccc">&copy; Global Vision Bunkers all rights reserved</div>
</div>
</body>
</html>
