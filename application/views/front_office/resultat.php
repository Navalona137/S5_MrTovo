	<div id="fh5co-product" style="background-color: lightgrey">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>RH.</span>
					<h1>RESULTAT TEST</h1>
				</div>
			</div>

			<div class="row">
				<div class="row col-md-12" style="padding-bottom: 1%;">
					<table class="table table-hover" style="margin-right: -600px; background-color: white">
						<tr>
			                <th> NOM </th>
			                <th> PRENOM </th>
			                <th> SCORE </th>
			            </tr>
			            <?php foreach ($resultat as $res) { ?>
		                <tr>
		                    <td><?php echo $res->nom; ?></td>
		                    <td><?php echo $res->prenom; ?></td>
		                    <td><?php echo $res->score; ?></td>
		                </tr>
		                <?php  } ?>
                	</table>    
				</div>
			</div>
		</div>
	</div>