<!-- $_SESSION['pageTitle'] = Home; -->

<!-- row2: header -->
<?php include 'php/header.php';?>

<div class="row">
    <?php include 'php/carousel.php';?>
</div>

<!-- row 3: article/aside -->
<div class="row"> <!-- Main Content Start -->
  <div class="col-sm-3 col-sm-push-9">
    <?php include 'php/side_column_item.php';?>
  </div>
  <div class="col-sm-9 col-sm-pull-3">
    <?php include 'php/page_body_item.php';?>
  </div>
</div> <!-- Main Content end -->

<!-- row 4: footer -->
<?php include 'php/footer.php';?>