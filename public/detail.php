<?php require_once('../private/initialize.php'); ?>

<?php

  // get requested id

  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('bird.php');
  }


  // find bird using id

  $bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $bird->name(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="bird.php">Back to the Aviary</a>

  <div id="page">
    <div class="detail">
      <dl>
        <dt>Name</dt>
        <dd><?php echo $bird->common_name ?></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo $bird->habitat ?></dd>
      </dl>
      <dl>
        <dt>Food</dt>
        <dd><?php echo $bird->food ?></dd>
      </dl>
      <dl>
        <dt>Conservation Level</dt>
        <dd><?php echo $bird->conservation(); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips</dt>
        <dd><?php echo $bird->backyard_tips ?></dd>
      </dl>
      
    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
