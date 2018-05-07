<?php

session_start();

require_once './lib/connect.php';


function getTitle()
{
	echo "Catalog Page";
}

include "./partials/head.php";

//Request data from DB
$items_sql = "SELECT * FROM items";
$items = mysqli_query($conn, $items_sql);
// var_dump($items);

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<h1>Catalog Page</h1>

		<div class="grid-container">

		<?php
			foreach ($items as $item) {
				// var_dump($item);
				// echo $item['product_name'] . '<br>';
				// echo $item['description'] . '<br>';
				// echo $item['price'] . '<br>';
				// echo $item['image'] . '<br>';
				extract($item);

				echo '

				
					<div class="card">
					  <img class="card-img-top" src="'.$image.'" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">'.$product_name.'</h5>
					    <p class="card-text">'.$description.'</p>
					    <a href="item.php?id='.$id.'" class="btn btn-primary">View Details</a>
					  </div>
					</div>
					

				';
			}
		?>
		</div>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>