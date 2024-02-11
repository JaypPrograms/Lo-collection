<?php
/**
 * The header for our theme
 *
 * 
 * 
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<style type="text/css">
	
	.heads{
	display: flex;
   justify-content: flex-end;
   align-items: right;
   padding: 10px 4%;
   background-color: rgba(91,55,21,1);
   position: relative;
}



	.navs .jayp  {
	color: white;
   font-size: 40px;
   margin-top: 10px;
   display: inline-block;
   padding: 0px 20px;
   }
.logos{
  cursor: pointer;
  margin-right: auto;
  
}

.jayp:hover {
  color: pink;
  text-decoration: none;
}

</style>
            	<header class="heads">
                	<img class="logos" src="http://localhost/jayp/wp-content/uploads/2021/05/lo-collection-1.jpg" width="70" height="70" alt="logo">
                    <ul class="navs">
                        <li class="jayp">
                            <a class="jayp" href="http://localhost/jayp/index.php/home/"  >Home</a>
                        </li>

                        <li class="jayp">
                            <a class="jayp" href="http://localhost/jayp/index.php/contact/">Contact</a>
                        </li>

                        <li class="jayp">
                            <a class="jayp" href="http://localhost/jayp/index.php/about/">About Us</a>
                        </li>

                        <li class="jayp">
                            <a class="jayp" href="http://localhost/jayp/index.php/shop/">Shop</a>
                        </li>
                        <a class="cta" href="http://localhost/jayp/index.php/cart/"><img class="logo" src="http://localhost/jayp/wp-content/uploads/2021/05/5.png" width="50" height="50" alt="logo"></a>
                    </ul>
                </header>
            