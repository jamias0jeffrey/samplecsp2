<?php

session_start();

session_destroy();

header('location: ./login.php');

function getTitle()
{
	echo "Log Out Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<h1>Log Out Page</h1>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>