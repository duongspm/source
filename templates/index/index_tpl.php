<?php if(count($brand)) { ?>
	<div class="wrap-brand">
		<div class="wrap-content">
			<div class="owl-page owl-carousel owl-theme"
				data-xsm-items = "2:10" 
	            data-sm-items = "5:10" 
	            data-md-items = "5:10" 
	            data-lg-items = "6:10" 
	            data-xlg-items = "7:10" 
	            data-rewind = "1" 
	            data-autoplay = "1" 
	            data-loop = "0" 
	            data-lazyload = "0" 
	            data-mousedrag = "1" 
	            data-touchdrag = "1" 
	            data-smartspeed = "500" 
	            data-autoplayspeed = "3500" 
	            data-dots = "0" 
	            data-nav = "1" 
	            data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" 
	            data-navcontainer = ".control-brand">
				<?php foreach($brand as $v) { ?>
					<div>
						<a class="brand text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
							<?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '150x150x2', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
						</a>
					</div>
				<?php } ?>
			</div>
			<div class="control-brand control-owl transition"></div>
		</div>
	</div>
<?php } ?>

<?php if(count($pronb)) { ?>
	<div class="wrap-product wrap-content">
		<div class="title-main"><span>Sản phẩm nổi bật</span></div>
		<div class="paging-product"></div>
	</div>
<?php } ?>

<?php if(count($splistnb)) { foreach($splistnb as $vlist) { ?>
	<div class="wrap-product wrap-content">
		<div class="title-main"><span><?=$vlist['name'.$lang]?></span></div>
		<div class="paging-product-category paging-product-category-<?=$vlist['id']?>" data-list="<?=$vlist['id']?>"></div>
	</div>
<?php } } ?>

<div class="wrap-intro mb-5">
	<div class="wrap-content py-5">
		<div class="title-main"><span>Video clip - tin tức</span></div>
		<div class="row">
			<div class="col-6">
				<?php if(!empty($newsnb)) { ?>
					<div class="news-intro position-relative">
						<span class="news-control position-absolute transition" id="up"><i class="fas fa-chevron-up"></i></span>
						<span class="news-control position-absolute transition" id="down"><i class="fas fa-chevron-down"></i></span>
						<div class="news-scroll position-relative">
							<ul class="list-unstyled p-0 m-0">
								<?php foreach($newsnb as $v) { ?>
									<li>
										<div class="news-shadow d-flex align-items-center justify-content-start">
											<div class="news-shadow-time position-relative text-capitalize text-center">
												<span class="d-block"><?=$func->makeDate($v['date_created'])?></span>
												<span class="d-block"><?=date("d/m/Y",$v['date_created'])?></span>
											</div>
											<div class="news-shadow-article position-relative d-flex align-items-center justify-content-start">
												<a class="news-shadow-image rounded-circle scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
													<?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '90x90x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
												</a>
												<div class="news-shadow-info">
													<h3 class="news-shadow-name">
														<a class="text-decoration-none transition text-split" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
													</h3>
													<div class="news-shadow-desc text-split"><?=$v['desc'.$lang]?></div>
												</div>
											</div>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
		        <?php } ?>
			</div>
			<div class="col-6">
				<div class="video-intro">
					<?=$addons->set('video-fotorama', 'video-fotorama', 4);?>
					<?php /* $addons->set('video-select', 'video-select', 4); */ ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if(count($partner)) { ?>
	<div class="wrap-partner">
		<div class="wrap-content">
			<div class="owl-page owl-carousel owl-theme"
				data-xsm-items = "2:10" 
	            data-sm-items = "5:10" 
	            data-md-items = "5:10" 
	            data-lg-items = "6:10" 
	            data-xlg-items = "7:10" 
	            data-rewind = "1" 
	            data-autoplay = "1" 
	            data-loop = "0" 
	            data-lazyload = "0" 
	            data-mousedrag = "1" 
	            data-touchdrag = "1" 
	            data-smartspeed = "500" 
	            data-autoplayspeed = "3500" 
	            data-dots = "0" 
	            data-nav = "1" 
	            data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" 
	            data-navcontainer = ".control-partner">
				<?php foreach($partner as $v) { ?>
					<div>
						<a class="partner" href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>">
							<?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '150x120x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
						</a>
					</div>
				<?php } ?>
			</div>
			<div class="control-partner control-owl transition"></div>
		</div>
	</div>
<?php } ?>