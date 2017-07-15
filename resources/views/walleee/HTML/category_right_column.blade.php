<!--added by Mad-->  
					@for ($i=0; $i<1; $i++)                 
                    	
                               <div class="w100 clearfix category-top">
                				<h2> {{$category[$i]->prod_cat_name}} </h2>

                			<div class="categoryImage"><img src="{{$category[$i]->prod_category_image_uri}}" class="img-responsive" alt="img"></div>
            </div>
            		@endfor