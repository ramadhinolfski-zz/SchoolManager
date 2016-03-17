<!-- BEGIN CONTENT-->
<div id="content">
	<section>
		<div class="section-body">
			<div class="row">

			<?php foreach ($query as $row) {
				echo "<br />";
				echo $row->nip;
				echo $row->name;
				echo $row->phone;
				echo $row->username;
				echo "<br />";
			} ?>

			</div>
		</div>
	</section>
</div>