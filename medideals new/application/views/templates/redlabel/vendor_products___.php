
	<!-- Content Start -->
	<section class="content inner-pg shop-pg shop-product-pg clearfix">
		<!-- Breadcrumb Start -->
		<div class="breadcrumb-title clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="breadcrumb-left">
							<!--<ol class="breadcrumb">
								<li>
									<a href="index.html">HOME</a>
								</li>
								<li>
									<a href="shop.html">Shop</a>
								</li>
								<li>
									<a href="shop.html">Vitamins & Supplements</a>
								</li>
								<li class="active">DiamondClean Rechargeable Electric Toothbrush</li>
							</ol>--><!--/.breadcrumb-->
						</div><!--/.breadcrumb-left-->
					</div><!--/.col-sm-6 col-md-6-->
					<div class="col-sm-6 col-md-6">
						<div class="breadcrumb-right">
							<h5>Shop</h5>
						</div>
					</div><!--/.col-sm-6 col-md-6"-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!-- Breadcrumb End -->
		<!-- Product Items Detail Start -->
		<div class="product-items-detail clearfix">
			<div class="col-sm-12 col-md-6 col-lg-6 padding">
				<div class="left-side">
					<a class="image fancybox" data-fancybox-group="gallery" href="images/shop-product-img.jpg"><img alt="IMAGE" class="img-responsive" src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 padding">
				<div class="right-side">
					<h4><?= $product['title'] ?></h4>
					<h5><?= $product['price'] . CURRENCY ?></h5>
					<!--<div class="product-use">
						<p>Pellentesque semper odio erat.</p>
					</div>
-->					<div class="quantity clearfix">
 <?php if ($product['quantity'] > 0) { ?>
 
  <a href="<?= LANG_URL . '/shopping-cart' ?>" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="btn btn-default add-to-cart btn-add primary-btn add-to-cart">
                            <span class="text-to-bg"><i class="fa fa-shopping-cart"></i><?= lang('add_to_cart') ?></span>
                        </a>
 
				<!--		<input class="form-control" min="1" name="text" size="4" step="1" type="number" value="1"> <a class="btn btn-default" href="#" role="button">Add To Cart</a>-->
                         <?php } else { ?>
                        <div class="alert alert-info"><?= lang('out_of_stock_product') ?></div>
                    <?php } ?>
                    
					</div>
					<div class="product-categories">
						<span>Categories:</span> <?= $product['categorie_name'] ?>
					</div>
				</div><!--/.right-side-->
			</div><!--/.col-sm-12 col-md-6 col-lg-6 padding-->
		</div><!-- Product Items Detail End -->
		<!-- Content Description Start -->
		<div class="content-desc clearfix">
			<div class="container">
				<!-- Product Related Description Start -->
				<div class="product-related-desc clearfix">
					<!-- Description Start -->
					<div class="description clearfix">
						<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs" role="tabpanel">
							<ul class="nav nav-tabs nav-tabs-responsive" id="myTab" role="tablist">
								<li class="active" role="presentation">
									<a aria-expanded="true" data-toggle="tab" href="#description" id="home-tab" role="tab"><span class="text">description</span></a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade in active" id="description" role="tabpanel">
									<h6>DESCRIPTION</h6>
									<?= $product['description'] ?>
								</div><!--/.tab-pane-->
							</div><!--/.tab-content-->
						</div><!--/.bs-example-->
					</div><!-- Description End -->
					<!-- Related Products Start -->
					<div class="related-products clearfix">
						<!-- Section Title Start -->
						<div class="section-title">
							<h5>RELATED PRODUCTS</h5>
						</div><!-- Section Title End -->
						<!-- Shop Items List Start -->
						<div class="shop-products-list clearfix">
							<div class="row">
								<?php foreach($sameCagegoryProducts as $releted) 
			{
			
			//print_r($product);
			?>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div class="product-block">
										<a href="<?php echo base_url()?><?php echo $releted['url'] ?>">
										<div class="image"><img alt="IMAGE" class="img-responsive" src="<?= base_url('attachments/shop_images/' . $releted['image']) ?>"></div>
										<div class="product-detail">
											<h6><?= $releted['title'] ?></h6>
											<?= $releted['description'] ?><span><?php echo CURRENCY.' ' ?><?= $releted['price'] ?></span>
										</div></a>
										<div class="add-read-more-icons">
											<a href="<?= LANG_URL . '/ShoppingCartPage' ?>" data-id="<?= $releted['id'] ?>" data-goto="<?= LANG_URL . '/ShoppingCartPage' ?>"><svg class="svg-addCartIcon" height="27px" viewbox="0 0 24 27" width="24px">
											<path class="addtocart_bag" d="M3.0518948,6.073 L0.623,6.073 C0.4443913,6.073064 0.2744004,6.1497833 0.1561911,6.2836773 C0.0379818,6.4175713 -0.0170752,6.5957608 0.005,6.773 L1.264,16.567 L0.006,26.079 C-0.0180763,26.2562394 0.0363321,26.4351665 0.155,26.569 C0.2731623,26.703804 0.4437392,26.7810739 0.623,26.781 L17.984,26.781 C18.1637357,26.7812017 18.3347719,26.7036446 18.4530474,26.5683084 C18.5713228,26.4329722 18.6252731,26.2530893 18.601,26.075 L18.489,25.233 C18.4652742,25.0082534 18.3215123,24.814059 18.1134843,24.7257511 C17.9054562,24.6374431 17.6658978,24.6689179 17.4877412,24.8079655 C17.3095847,24.947013 17.2208653,25.1717524 17.256,25.395 L17.274,25.534 L1.332,25.534 L2.509,16.646 C2.5159976,16.5925614 2.5159976,16.5384386 2.509,16.485 L1.33,7.312 L2.853102,7.312 C2.818066,7.6633881 2.8,8.0215244 2.8,8.385 C2.8,8.7285211 3.0784789,9.007 3.422,9.007 C3.7655211,9.007 4.044,8.7285211 4.044,8.385 C4.044,8.0203636 4.0642631,7.6620439 4.103343,7.312 L14.5126059,7.312 C14.5517192,7.6620679 14.572,8.02039 14.572,8.385 C14.571734,8.5500461 14.6371805,8.7084088 14.7538859,8.8251141 C14.8705912,8.9418195 15.0289539,9.007266 15.194,9.007 C15.3590461,9.007266 15.5174088,8.9418195 15.6341141,8.8251141 C15.7508195,8.7084088 15.816266,8.5500461 15.816,8.385 C15.816,8.0215244 15.797934,7.6633881 15.762898,7.312 L17.273,7.312 L16.264,15.148 C16.2418906,15.3122742 16.2862643,15.4785783 16.3872727,15.6100018 C16.4882811,15.7414254 16.6375681,15.8270962 16.802,15.848 C16.9668262,15.8735529 17.1349267,15.8304976 17.2671747,15.7288556 C17.3994227,15.6272135 17.4842817,15.4758514 17.502,15.31 L18.602,6.773 C18.6234087,6.5958949 18.5681158,6.4180821 18.4500484,6.2843487 C18.3319809,6.1506154 18.1623929,6.0737087 17.984,6.073 L15.5641052,6.073 C14.7827358,2.5731843 12.2735317,0.006 9.308,0.006 C6.3424683,0.006 3.8332642,2.5731843 3.0518948,6.073 Z M4.3273522,6.073 L14.2884507,6.073 C13.5783375,3.269785 11.6141971,1.249 9.308,1.249 C7.0015895,1.249 5.0372989,3.2688966 4.3273522,6.073 Z" fill="#141414" fill-rule="evenodd"></path>
											<path class="addtocart_circle" d="M17.6892,25.874 C14.6135355,25.8713496 12.1220552,23.3764679 12.1236008,20.3008027 C12.1251465,17.2251374 14.6191332,14.7327611 17.6947988,14.7332021 C20.7704644,14.7336431 23.2637363,17.2267344 23.2644,20.3024 C23.2604263,23.3816113 20.7624135,25.8753272 17.6832,25.874 L17.6892,25.874 Z M17.6892,16.2248 C15.4358782,16.2248 13.6092,18.0514782 13.6092,20.3048 C13.6092,22.5581218 15.4358782,24.3848 17.6892,24.3848 C19.9425218,24.3848 21.7692,22.5581218 21.7692,20.3048 C21.7692012,19.2216763 21.3385217,18.1830021 20.5720751,17.4176809 C19.8056285,16.6523598 18.7663225,16.2232072 17.6832,16.2248 L17.6892,16.2248 Z" fill="#141414"></path>
											<path class="addtocart_plus" d="M18.4356,21.0488 L19.6356,21.0488 L19.632,21.0488 C20.0442253,21.0497941 20.3792059,20.7164253 20.3802,20.3042 C20.3811941,19.8919747 20.0478253,19.5569941 19.6356,19.556 L18.4356,19.556 L18.4356,18.356 C18.419528,17.9550837 18.0898383,17.6383459 17.6886,17.6383459 C17.2873617,17.6383459 16.957672,17.9550837 16.9416,18.356 L16.9416,19.556 L15.7392,19.556 C15.3269747,19.556 14.9928,19.8901747 14.9928,20.3024 C14.9928,20.7146253 15.3269747,21.0488 15.7392,21.0488 L16.9416,21.0488 L16.9416,22.2488 C16.9415997,22.4469657 17.0204028,22.6369975 17.1606396,22.7770092 C17.3008764,22.9170209 17.4910346,22.9955186 17.6892,22.9952 L17.6856,22.9952 C17.8842778,22.99648 18.0752408,22.9183686 18.2160678,22.7782176 C18.3568947,22.6380666 18.4359241,22.4474817 18.4356,22.2488 L18.4356,21.0488 Z" fill="#141414"></path></svg></a> <a class="more-info" href="shop-detail.html"><svg class="svg-moreIcon" height="24px" width="50px">
											<circle cx="12" cy="12" r="2"></circle>
											<circle cx="20" cy="12" r="2"></circle>
											<circle cx="28" cy="12" r="2"></circle></svg></a>
										</div><!--/.add-read-more-icons-->
									</div><!--/.product-block-->
								</div>
                                
                                
                                <?php }?>
                                
                                
                                <!--/.col-xs-6 col-sm-6 col-md-3 col-lg-3-->
							</div><!--/.row-->
						</div><!-- Shop Items List End -->
					</div><!-- Related Products End -->
				</div><!-- Product Related Description End -->
			</div><!--/.container-->
		</div><!-- Content Description End -->
	</section><!-- Content End -->