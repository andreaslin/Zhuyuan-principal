﻿<?php
	include("../phpFileTree/php_file_tree.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>05-社區人士及家長互動良好</title>

    <!-- phpFileTree CSS -->
	<link href="../phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css"/>

	<!-- Makes the file tree(s) expand/collapsae dynamically -->
	<!--<script src="../phpFileTree/php_file_tree.js" type="text/javascript"></script>-->

</head>

<body>
	<?php
		$dir="..\docs\\05-公共關係\\05-社區人士及家長互動良好";
		$dir=iconv("utf-8", "big5", $dir);
		echo php_file_tree($dir, "[link]");
		/*foreach (glob("../docs/*") as $filename) {
			$filename = iconv("big5", "utf-8", $filename);
			echo $filename . "<br>";	
		}*/
		
	?>
</body>