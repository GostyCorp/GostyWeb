<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css"></link>
	<link rel="stylesheet" type="text/css" href="./lolyWeb.css"></link>
	<link rel="icon" href="img/logo.png"></link>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home">>Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#presentation">>Présentation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#minecraft">>Minecraft</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#php">>PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#javascript">>JavaScript</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade show active" id="home">
						<?php
							include "page/home.php"
						?>
					</div>
					<div class="tab-pane fade" id="presentation">
						<?php
							include "page/presentation.php"
						?>
					</div>
					<div class="tab-pane fade" id="minecraft">
						<?php
							include "page/minecraft.php"
						?>
					</div>
					<div class="tab-pane fade" id="php">
						<?php
							include "page/php.php"
						?>
					</div>
					<div class="tab-pane fade" id="javascript">
						<?php
							include "page/javascript.php"
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
			</div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>