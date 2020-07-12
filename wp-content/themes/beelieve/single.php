<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beelieve -<?php the_title();?> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    .menu{
      height: 65px;
      background-color: #2456B9;
    }
    .logo{
      font-size: 25px;
      font-weight: bold;
      color: #000;
      text-align: center;
    }
    .item{
      font-size: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="w-100 menu d-flex">
    <div class="logo w-25 d-flex align-items-center pl-3">Beelieve</div>
    <div class="items w-75 pr-5 text-right d-flex align-items-center justify-content-end">
      <div class="item p-10 ml-4">Home</div>
      <div class="item ml-4">New / Events</div>
      <div class="item ml-4 ">Our work</div>
      <div class="item ml-4">Career</div>
    </div>
  </div>
  <!--Query Get Posts Default -->
<?php while (have_posts()) : the_post(); ?>



<!--Query Get Posts Default -->

  <img class="img"  width="100%" height="400" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full', array( 'class' =>'') ); ?>" />
  <div class="container">
    <h1><?php the_title();?></h1>
    <div class=""><?php echo get_the_date( 'd-m-Y' ); ?></div>
    <div class="mt-5">
	<?php the_content();?>
    </div>
  </div>
  <?php endwhile; ?>
</body>
</html>