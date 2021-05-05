<?php if (isset($_GET["page"])): ?>

	<!-- Flutter Active -->
	<?php if ($_GET["page"]=='flutter'): ?>
		<li class="nav-item">
			<a class="nav-link active" href="index.php?page=flutter&#flutter">Flutter</a>
		</li>
	<?php else: ?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=flutter&#flutter">Flutter</a>
		</li>
	<?php endif ?>

	<!-- Php Active -->
	<?php if ($_GET["page"]=='pepe'): ?>
		<li class="nav-item">
			<a class="nav-link active" href="index.php?page=pepe&#pepe">Php</a>
		</li>
	<?php else: ?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=pepe&#pepe">Php</a>
		</li>
	<?php endif ?>

	<!-- Python Active -->
	<?php if ($_GET["page"]=='python'): ?>
		<li class="nav-item">
			<a class="nav-link active" href="index.php?page=python&#python">Python</a>
		</li>
	<?php else: ?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=python&#python">Python</a>
		</li>
	<?php endif ?>

	<!-- Java Active -->
	<?php if ($_GET["page"]=='java'): ?>
		<li class="nav-item">
			<a class="nav-link active" href="index.php?page=java&#java">Java</a>
		</li>
	<?php else: ?>
		<li class="nav-item">
			<a class="nav-link" href="index.php?page=java&#java">Java</a>
		</li>
	<?php endif ?>

	<li class="nav-item">
		<a class="nav-link disabled" href="#">JavaScript(Soon)</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">
			<h1>♠</h1>
		</a>
	</li>


<?php else: ?>
	<li class="nav-item">
		<a class="nav-link active" href="index.php?page=flutter&#flutter">Flutter</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="index.php?page=pepe&#pepe">Php</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="index.php?page=python&#python">Python</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="index.php?page=java&#java">Java</a>
	</li>

	<li class="nav-item">
		<a class="nav-link disabled" href="#">JavaScript(Soon)</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">
			<h1>♠</h1>
		</a>
	</li>


<?php endif ?>



<!-- 
<li class="nav-item">
	<a class="nav-link active" href="#flutter">Flutter</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#pepe">Php</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#python">Python</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#java">Java</a>
</li>
<li class="nav-item">
	<a class="nav-link disabled" href="#">JavaScript(Soon)</a>
</li>  
-->