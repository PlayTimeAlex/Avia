<?php
	$colums = 12; //Columns count
	$gutter = 18; //gutter width px
	$inits = '%';
	$container = 980;
	$percent = $container/100;
	$gutterWidth = (($gutter*($colums-1))/$percent)/($colums-1);
	$columWidth = (($container - ($gutter*($colums-1)))/9)/$percent;
?>	
.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
    line-height: 0;
}
.clearfix:after {
    clear: both;
}
[class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 18px;
}  
.row-fluid {
    width: 100%;
}
.row-fluid:before,
.row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
}
.row-fluid:after {
    clear: both;
}
.row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: <?php echo $gutterWidth,$inits; ?>;
}
.row-fluid [class*="span"]:first-child {
    margin-left: 0;
}	
<?php	
	for ($i=0; $i++<$colums;){
		$currColWidth = $columWidth*$i+$gutterWidth*($i-1);
		echo ".row-fluid .span$i{\n";
		echo "    width:$currColWidth$inits;\n";
		echo "}\n";
	}
	for ($i=9; $i-->1;){
		$curroffsert = $columWidth*$i+$gutterWidth*($i+1);
		echo ".row-fluid .offset$i{\n";
		echo "    margin-left: $curroffsert$inits;\n";
		echo "}\n";
		$curroffsert = $columWidth*$i+$gutterWidth*$i;
		echo ".row-fluid .offset$i:first-child{\n";
		echo "    margin-left: $curroffsert$inits;\n";
		echo "}\n";		
	}	
?>