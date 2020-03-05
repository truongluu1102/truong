<?php
$array = array();
foreach ( new DirectoryIterator( $_SERVER[ 'DOCUMENT_ROOT' ] . "/image/banner" ) as $fileInfo ) {
	if ( $fileInfo->isDot() ) continue;
	$array[] = array( 'banner_name' => $fileInfo->getFilename() );
}


?>


<link href="/css/banner/banner.css" rel="stylesheet" type="text/css"/>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php
		$i = 0;
		foreach ( $array as $row ) {
			
			if ( $i == 0 )echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i' class='active'></li>";
			else echo "  <li data-target='#carouselExampleIndicators' data-slide-to='$i'></li>";
			$i++;
		}
		?>


	</ol>
	<div class="carousel-inner">
		<?php
		$i = 0;
		foreach ( $array as $row ) {
			$i++;
			if ( $i == 1 )echo "
								<div class='carousel-item active'>
                                <img src='/image/banner/$row[banner_name]' class='d-block w-100' >
                            	</div>
								";
			else echo "
								<div class='carousel-item'>
                                <img src='/image/banner/$row[banner_name]' class='d-block w-100' >
                            	</div>
								";
		}

		?>


	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
	</div>