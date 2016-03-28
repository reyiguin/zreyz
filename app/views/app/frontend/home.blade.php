@include('app.frontend._tpl.header') 

<div class="container-fluid" style="margin-top: -20px;">
  <div class="row">
   <div class="col-md-12 banner-container">
    <div class="banner banner-slider">
     <img src = "http://d26f0qb3ecs5t7.cloudfront.net/img/banner.jpg" class = "img-responsive slick-slide ">
  	    {{ HTML::image('/images/home/home_banner/buying-online.jpg','', array('class'=>'img-responsive slick-slide ')) }}
  	    {{ HTML::image('/images/home/home_banner/satisfied-buyer.jpg','', array('class'=>'img-responsive slick-slide ')) }}
    </div>
   </div>
  </div>
 </div>
 <div class="container search-box">
  <div class="row">
   <div class="col-xs-12 col-md-8 col-md-offset-2">
    <form  onsubmit="return false;">
     <div class="search-box">
      <div class="input-group">
       <input type="hidden" name="search_param" value="name" id="search_param">
       <input type="text" class="form-control" name="q" placeholder="What are you looking for today?" id="searchKey" value="">
       <span class="input-group-btn hidden">
         <span class="btn gray-bg radius-0 hidden-xs" title="Clear">in</span>
	   </span>
       <input type="hidden" name="search_param" value="name" id="search_param">
       <input type="text" class="form-control hidden-xs hidden" name="q" placeholder="Philippines" id="search_key" value="">
       <span class="input-group-btn">
         <button id="btnMainSearch" class="btn btn-ipostmo-blue" type="submit"> <i class="fa fa-search fa-lg"></i> Search  </button>
       </span>
     </div>
   	</div>
  </form>
  </div>
 </div>
 
 
 
 <div class="container category-box desktop-category">
          <p class="text-center ipostmo-header">or browse our top categories</p>
 <div class="btn-mobile-categories" align="center">
	<button type="button" class="btn btn-ipostmo-blue" data-toggle="modal" data-target="#categoryModal"><span class="glyphicon glyphicon-th-list"></span> Browse top categories<span class="caret"></span></button>
</div>
          <div class="row">

            <ul class="hide-bullets text-center">
                 <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="job-search">
                      <div class="caption"><p>Jobs</p></div>
                      <img src="./images/home/home_category/jobs.png" class="img-responsive category-cursor" title="Job Search">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="mobile-phone">
                      <div class="caption"><p>Mobile Phones</p></div>
                      <img src="./images/home/home_category/mobile-phone.png" class="img-responsive category-cursor" title="Mobile Phones &amp; Tablets">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="real-estate">
                      <div class="caption"><p>Real Estate</p></div>
                      <img src="./images/home/home_category/real-estate.png" class="img-responsive category-cursor" title="Real Estate">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="pets">
                      <div class="caption"><p>Pets</p></div>
                      <img src="./images/home/home_category/pets.png" class="img-responsive category-cursor" title="Pets">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="automotive">
                      <div class="caption"><p>Cars &amp; Automotive</p></div>
                      <img src="./images/home/home_category/automotive.png" class="img-responsive category-cursor" title="Automotive">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="sports-hobby">
                      <div class="caption"><p>Sports &amp; Hobbies</p></div>
                      <img src="./images/home/home_category/sports_hobby.png" class="img-responsive category-cursor" title="Sports &amp; Hobbies">
                    </a>
                </li>
            </ul>
          </div>
          <div class="row">
            <ul class="hide-bullets text-center">
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="electronics">
                      <div class="caption"><p>Electronics</p></div>
                      <img src="./images/home/home_category/electronics.png" class="img-responsive category-cursor" title="Electronics">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="services">
                      <div class="caption"><p>Services</p></div>
                      <img src="./images/home/home_category/services.png" class="img-responsive category-cursor" title="Services">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="fashion">
                      <div class="caption"><p>Clothes</p></div>
                      <img src="./images/home/home_category/clothes.png" class="img-responsive category-cursor" title="Fashion">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="baby-and-kids">
                      <div class="caption"><p>Baby Stuffs</p></div>
                      <img src="./images/home/home_category/baby.png" class="img-responsive category-cursor" title="Baby &amp; Kids">
                    </a>
                </li>

                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="home-and-outdoor">
                      <div class="caption"><p>Outdoor Stuffs</p></div>
                      <img src="./images/home/home_category/outdoor.jpg" class="img-responsive category-cursor" title="Home &amp; Outdoor">
                    </a>
                </li>
                <li class="col-sm-2 category-block">
                    <a class="category-thumb thumbnail" data-category="health-and-beauty">
                      <div class="caption"><p>Health &amp; Beauty</p></div>
                      <img src="./images/home/home_category/health_beauty.jpg" class="img-responsive category-cursor" title="Health &amp; Beauty">
                    </a>
                </li>
            </ul>
          </div>
        </div>
 
 
</div>


<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title" align="center">Ipostmo Top Categories</h4>
                      </div>
                      <div class="modal-body">
                        <div class="table-responsive table-mobile-category">
                          <div class="list-mobile-category">
                            <a class="category-thumb category-cursor" data-category="job-search" title="Job Search">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/jobs.png" alt="Job Search" width="65" height="65"> Job Search
                            </a>
                          </div>

                          <div class="list-mobile-category">
                            <a class="category-thumb category-cursor" data-category="mobile-phone" title="Mobile Phones &amp; Tablets">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/mobile-phone.png" alt="Mobile Phones &amp; Tablets" width="65" height="65"> Mobile Phones &amp; Tablets
                            </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="real-estate" title="Real Estate">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/real-estate.png" alt="Smiley face" width="65" height="65"> Real Estate
                           </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="pets" title="Pets">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/pets.png" alt="Smiley face" width="65" height="65"> Pets
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="automotive" title="Automotive">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/automotive.png" alt="Smiley face" width="65" height="65"> Automotive
                          </a>
                          </div>

                          <div class="list-mobile-category">
                            <a class="category-thumb category-cursor" data-category="sports-hobby" title="Sports Hobby">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/sports_hobby.png" alt="Smiley face" width="65" height="65"> Sports and Hobby
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="services" title="Services">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/services.png" alt="services.png" width="65" height="65"> Services
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="electronics" title="Electronics">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/electronics.png" alt="electronics.png" width="65" height="65"> Electronics
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="fashion" title="Fashion">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/clothes.png" alt="fashion.png" width="65" height="65"> Fashion
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="baby-and-kids" title="Baby and Kids">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/baby.png" alt="baby.png" width="65" height="65"> Baby and Kids
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="home-and-outdoor" title="Home and Outdoor">
                            <img class="img-category img-mobile-category" src="http://d26f0qb3ecs5t7.cloudfront.net/img/category/outdoor.jpg" alt="outdoor.png" width="65" height="65"> Home and Outdoor
                          </a>
                          </div>

                          <div class="list-mobile-category">
                          <a class="category-thumb category-cursor" data-category="health-and-beauty" title="Health and Beauty">
                            <img class="img-category img-mobile-category" src="assets/img/home/health_beauty.jpg" alt="health_beauty.png" width="65" height="65"> Health and Beauty
                          </a>
                          </div>
                      </div>
                    </div>
                  </div>



<div class="container">
	<p class="lead text-center">Recent Posts</p>
	<div class = "recent-post-section">
		<div id="recentPostContainer">
			<div id="products" class="row list-group">
				<ul class="item-list">
					<li class="thumbnail item col-md-3 col-sm-3 item-img">
          				<div class="imgLiquidFill imgLiquid">
              				<img class="group list-group-image img-responsive post-image" src="{{ Request::root() }}/assets/img/gts.jpg" alt="Post Name"/>
          				</div>
          				<div class="caption">
              			<h4 class="group inner list-group-item-heading post-title">Product Name</h4>
              				<div class="row">
                  				<div class="col-xs-12 col-md-12 price-date-holder">
                      				<span class="pull-left badge">Php 2,000</span>
                      				<small class="pull-right">2 hours ago </small>
                  				</div>
              				</div>
          				</div>
      				</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@include('app.frontend._tpl.footer') 