<?php $this->load->view ("user/header") ?>
<!--banner-->
<style type="text/css">
	.row{
		margin: 5px;
	}
	.border1{
		border: thin solid;
	}

	.header1{
		color: #38d3eb;;
		font-weight: bold;
	}
	
</style>

<!-- <div class="page-content-inner"> -->
    <div class="row">
        <div class="col-md-12 container-costume border1 text-center"> 
        <!--SLIDER-->
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?php echo base_url('assets/user/bahan/slide1.jpg')?>" alt="">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="<?php echo base_url('assets/user/bahan/slide2.jpg')?>" alt="">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="<?php echo base_url('assets/user/bahan/slide3.jpg')?>" alt="">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
        <!--end SLIDER-->
        </div>
	</div>
	<div class="row">
        <div class="col-md-12"> 
        <div class="row">
        	<div class="col-md-6">
        		<h4 class="header1">Jurusan</h4>
        		<table class="table table-bordered">
        			<thead>
        				<tr>
        					<th width="10px">No</th>
        					<th>Jurusan</th>
        				</tr>
        			</thead>
        			<tbody>
        				<tr>
        					<td>1</td>
        					<td>IPA</td>
        				</tr>
        				<tr>
        					<td>2</td>
        					<td>IPS</td>
        				</tr>
        				<!--<tr>
        					<td>3</td>
        					<td>Jurusan 3</td>
        				</tr> -->
        			</tbody>
        		</table>
        	</div>
        	<div class="col-md-6">
        		<h4 class="header1">Kegiatan</h4>
        		<div class="sidebar col-md-12 col-sm-12">
		            <ul class="list-group margin-bottom-25 sidebar-menu">
		              <li class="list-group-item clearfix"><i class="fa fa-angle-right"></i> ASSEMBLY</li>
		              <li class="list-group-item clearfix"><i class="fa fa-angle-right"></i> FIELDTRIP</li>
		              <li class="list-group-item clearfix"><i class="fa fa-angle-right"></i> PASKIBRA</li>
		              <li class="list-group-item clearfix"><i class="fa fa-angle-right"></i> JOB REVIEW</li>
		            </ul>
		          </div>
        	</div>
        </div>
        </div>
	</div>
	<div class="row">
        <div class="col-md-12"> 

        </div>
	</div>
<!-- </div>                                     -->
<?php $this->load->view ("user/footer")?>