 <?php 
/*
Template Name: Cryptocurrency Grid
*/ 
?>
<?php get_header(); ?>

<html>
<head>
<title>pure css table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.testTable {
  display: table;
  margin: 0px;
  padding: 0px;
}

.testRow {
  display: table-row;
}

.testRow li {
  list-style:none;
  display: table-cell;
  border: 1px solid #ccc;
  padding: 2px 6px;
}

.testHeader {
  display: table-header-group;

  /*position: absolute;*/
}

.secondHeader {
  display: table-header-group;
 /* position: fixed;
  top: 0px;*/
}

.thirdHeader
{
	 display: inline-block;
	   min-height:100px;
    padding: 10px;
}

.testHeader li {
  background-color: #f4f4f4;
}

.testBody {
  display: table-row-group;
}

.testBody .testRow > li
{
	border-top:none;
}

.mydiv
{
	margin:185px 0 100px 0;
}
.innerdiv
{
	width:90%;
	margin:0 auto;
}


.mydiv
{
	margin:185px 0 100px 0;
}
.innerdiv
{
	width:90%;
	margin:0 auto;
}

.secondHeader .testRow li
{
	/*border-bottom:none;*/
}

.expandable
{
	width:100%;
}

<!--- Pagging style --->

#pagination li .page-link {
    display: inline-block;
	border: 1px solid #ccc;
    background: #f4f4f4;
	
}

#pagination li,  .page-link {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
	list-style:none;
}

 .active .page-link {
    background-color: black;
    color: white;
}

.page-link:hover {background-color: #ddd;}

</style>
<?php 

if(isset($_GET['pageno']) & !empty($_GET['pageno'])){
	$curpage = $_GET['pageno'];
}else{
	$curpage = 1;
}

$totalres = 1386;

$perpage = 100;
$totalpage = ceil($totalres/$perpage);
$start = ($curpage * $perpage) - $perpage;
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
	
$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$url = "https://api.coinmarketcap.com/v1/ticker/?start=".$start."&limit=".$perpage."";

//$url = 'https://api.coindesk.com/v1/bpi/historical/close.json?start='.$before_1year .'&end='.$current_date.'';		
//$url = 'https://api.coinmarketcap.com/v1/ticker/?limit=100';
$rates = file_get_contents($url);
$rates = json_decode($rates, true);
//echo "<pre>";
//var_dump($rates);
//echo "</pre>";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 


	function showDiv(divID)
	{
		//alert(1);
		
		
		jQuery.noConflict();
			(function( $ ) {

		
					$("#panel"+divID).slideToggle("slow");
					 $('#flip'+divID).toggleClass('fa-plus-square fa-minus-square');
			 })(jQuery);
		
	
	}
	



</script>
<div class="mydiv">

<div class="innerdiv">


        <div class="testTable">
        
            <div class="testHeader">
                <ul class="testRow">
                	<li>&nbsp;</li>
                    <li>#</li>
                    <li>Name</li>
                    <li>Symbol</li>
                    <li>Market Cap</li>
                    <li>Price</li>
                    <li>Circulating Supply</li>
                    <li>Volum(24h)</li>
                    
                </ul>
            </div>
            
             <?php $i=$start+1; foreach($rates as $coin){ ?>
            
            <div class="secondHeader">
            
                <ul class="testRow">
                	<li id="flip<?php echo $i; ?>" class="fa fa-plus-square" style="cursor:pointer" onClick="showDiv(<?php echo $i; ?>);"></li>
                    <li><?php echo $i; ?></li>
                    <li><?php echo $coin['name']; ?></li>
                    <li><?php echo $coin['symbol']; ?></li>
                    <li><?php echo "$".$coin['market_cap_usd']; ?></li>
                    <li><?php echo "$".$coin['price_usd']; ?></li>
                    <li><?php echo $coin['total_supply']; ?></li>
                    <li><?php echo "$".$coin['24h_volume_usd']; ?></li>
                    
                    
                </ul>
                
                
            
            </div>
             <div class="thirdHeader" id="panel<?php echo $i; ?>" style="display:none;">
           		% 1hr: <?php echo "$".$coin['percent_change_1h']; ?><br/>
                % 24hr: <?php echo "$".$coin['24h_volume_usd']; ?><br/>
                % 7d: <?php echo "$".$coin['percent_change_7d']; ?>
             </div>
              <?php $i++;} ?>
         
        </div>
</div>

<div class="innerdiv" id="pagination">
 <?php if($curpage != $startpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?pageno=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>
    <?php } ?>
    
    
      <?php if($curpage >= 2){ ?>
    <li class="page-item"><a class="page-link" href="?pageno=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
    <?php } ?>
    
    <li class="page-item active"><a class="page-link" href="?pageno=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    
    <?php for($i = 1; $i<=$totalpage; $i++){ ?>
    
   
   
   <?php }?>
   
   <?php if($curpage != $endpage){ ?>
    <li class="page-item"><a class="page-link" href="?pageno=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
<?php } ?>

    
    
      <?php if($curpage != $endpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?pageno=<?php echo $endpage ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
    
    </div>
    
    
</div>


<?php do_action('qodef_page_after_container') ?>
	<?php get_footer(); ?>