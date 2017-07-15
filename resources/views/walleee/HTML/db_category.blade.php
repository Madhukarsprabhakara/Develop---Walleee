<!--added by Mad-->                   
                    @foreach ($category as $categories)
                                <li class="active dropdown-tree open-tree"><a class="dropdown-tree-a"> <span
                                        class="badge pull-right"></span> {{$categories->prod_cat_name}}  </a>
                            
                            		            
                                    <ul class="category-level-2 dropdown-menu-tree">
                            @foreach ($sub_categories as $sub_categories1)      
                                @if ($sub_categories1->prod_cat_id == $categories->prod_cat_id)    
                                    	<li class="dropdown-tree"><a class="dropdown-tree-a" href="http://localhost/category/{{$categories->prod_cat_id}}/scategory/{{$sub_categories1->prod_subcat_id}}">
                                            {{$sub_categories1->prod_sub_cat_name}}</a></li>
                                @endif            
                                       <!-- <li class="dropdown-tree"><a class="dropdown-tree-a" href="http://localhost/walleee/html/sub-category">
                                            Spirit & Ritual</a></li>-->
                                       <!-- <li><a> Shoes</a></li>
                                        <li><a> Shirt</a></li>
                                        <li><a>T shirt</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category"> Shirt</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Fragrances</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Scarf</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Sandal</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Underwear</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Winter Collection</a></li>
                                        <li><a href="http://localhost/walleee/html/sub-category">Men Accessories</a></li>-->
                             @endforeach       
                                    </ul>
                                     
                                </li>
                    @endforeach