<?php
namespace MochamadWahyu\Phpmvc\Controller;
class ProductController{
function categories(string $productid,string $categoryId):void{
        echo "PRODUCT $productid, CATEGORY $categoryId";
}
}