<!--added by Mad-->  
					@for ($i=0; $i<1; $i++)                 
                    	
                               <div class="w100 clearfix category-top">
                				<h2> {{$subcatImage[$i]->prod_sub_cat_name}} </h2>

                			<div class="categoryImage"><img src="{{$subcatImage[$i]->prod_sub_category_image_uri}}" class="img-responsive" alt="img"></div>
            </div>
            		@endfor