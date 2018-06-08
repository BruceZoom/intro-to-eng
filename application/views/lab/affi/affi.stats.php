<!-- info display -->
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-md-2"></div>
		<div class="col-md-8 column py-5">
		<div class="stats-info">
		
		</div>
	</div>
</div>
</div>

<!-- section 1 -->
<div class="stats-section-0 text-center py-5">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-6 column py-5">
				<div class="panel">
					<div class="panel-body stats-panel-0">
						<svg width="800" height="500" id="afan" class="center-block" />
					</div>
				</div>
			</div>
			<div class="col-md-6 column py-5">

			</div>
		</div>
	</div>
</div>

<!-- section 2 -->
<div class="stats-section-1 text-center py-5">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-4 column py-5">
			<h1>Publication Increament</h1>
			<h2>This displays the number of publications of the affiliation each year.<br>You can click the graph to change view.</h2>
			</div>
			<div class="col-md-8 column py-5">
				<div class="panel">
					<div class="panel-body stats-panel-1 text-center">
					<div id="pi1-div">
					<svg onclick="$('#pi1-div').hide('slow');$('#pi2-div').show('slow');" width="900" height="450" id="pi1" class="center-block" />
					<h2 style="color:black">Annual Publication Changes</h2>
					</div>
					<div id="pi2-div">
					<svg onclick="$('#pi2-div').hide('slow');$('#pi1-div').show('slow');" width="900" height="450" id="pi2" class="center-block" />
					<h2 style="color:black">Total Publication Increament</h2>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- section 3 -->
<div class="stats-section-0 text-center py-5">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-7 column py-5">
				<div class="panel">
					<div class="panel-body stats-panel-0">
					<svg width="750" height="500" id="cfpc" class="center-block" />
					</div>
				</div>
			</div>
			<div class="col-md-5 column py-5">
				<h1>Conference Distribution</h1>
				<h2>This graph shows the distribution of the publication of current affiliation in different conferences.</h2>
			</div>
		</div>
	</div>
</div>

<br><br><br>

<!-- plot operations -->
<script type='text/javascript'>

get_publication_increament should recieve one more parameter 'key', details please refer to my IE lab (updated)

plot_publication_increament("<?php echo site_url("visual/get_publication_increament?id=$affiliation_id&mode=1&key=affiliation"); ?>", 1);
plot_publication_increament("<?php echo site_url("visual/get_publication_increament?id=$affiliation_id&mode=2&key=affiliation"); ?>", 2);
$("#pi2-div").hide();
plot_conference_dist_pi_chart("<?php echo site_url("visual/author_con?id=$affiliation_id&key=affiliation"); ?>", "#cfpc");
plot_dynamic_force_direct_graph("<?php echo site_url("visual/get_dyn_cn_neighbor?affiliation_id=$affiliation_id"); ?>", "#afan");
</script>