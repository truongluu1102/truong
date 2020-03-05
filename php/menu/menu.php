<link href="/css/menu/menu.css" rel="stylesheet" type="text/css"/>
<div class="mid sticky-top menu">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success p-0 ">

		<div class="container pl-2  pr-2 ">
			<a class="navbar-brand" href="/">Trang Chủ</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown active is-active">
						<a class="nav-link" href="/country" id="navbarDropdown">
                              Danh mục sản phẩm
                            </a>
					
						<div class="dropdown-content menu-drop">
							<a class="dropdown-item drop" href="/country/?country=Úc" style="color: white"> Trái cây Úc </a>
							<a class="dropdown-item drop" href="/country/?country=Mỹ" style="color: white"> Trái cây Mỹ </a>
							<a class="dropdown-item drop" href="/country/?country=Việt+Nam" style="color: white"> Trái cây Việt Nam</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item drop" href="/country" style="color: white"> Nhiều hơn nữa...</a>
						</div>
					</li>
					<li class="nav-item active is-active">
						<a class="nav-link" href="/news"> Khám phá <span class="sr-only">(current)</span></a>
					</li>
					
				</ul>
				<form action="/search" method="get"> 
				<div class="input-group search">
				<input class="form-control" type="text" name="search_text" placeholder="Search">
				<button class="btn btn-secondary" type="submit" name="search"> <i class="fa fa-search"></i></button>
				</div>
				</form>
			</div>
		</div>
	</nav>
</div>