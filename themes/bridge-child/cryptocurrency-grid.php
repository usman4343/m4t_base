 <?php 
/*
Template Name: Cryptocurrency Grid
*/ 
?>
<?php get_header(); ?>


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
	/* display: inline-block;
	   min-height:100px;*/
	   display:none;
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


.selectbox
{
	color: #666666;
	border: 1px solid #ccc;
	border-radius:2px;
	padding:5px;
	margin-bottom: 15px;
}

.hideitem
{
	
	display:none;
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
tr{
	height:30px;
	}
	th
	{
		background:#f4f4f4;
		text-align:left;
	}
	
	table{
		border:1px solid #ccc;}
</style>
<?php 

if(isset($_GET['pageno']) & !empty($_GET['pageno'])){
	$curpage = $_GET['pageno'];
}else{
	$curpage = 1;
}

$totalres = 1386;

$perpage = 10;
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

jQuery.noConflict();
   		
	
				    document.addEventListener('DOMContentLoaded',function() {
				    document.querySelector('select[name="select_currency"]').onchange=changeEventHandler;
				},false);

					function changeEventHandler(event) {
					    // You can use “this” to refer to the selected element.
					    if(!event.target.value) alert('Please Select One');
					    else alert('You select ' + event.target.value + ' Curency.'); 

				}
				 

	function showccDiv(divID)
	{
		//alert(1);
		(function( $ ) {

				$("#ccpanel"+divID).slideToggle("slow");
				
				 $('#flipicon'+divID).toggleClass('fa-plus-square fa-minus-square');
				 
				
		 })(jQuery);
	}

	function change_currency(field)
	{
		(function( $ ) {
					
	
				var selected_currency_code = document.getElementById("select_currency").value;
				
				//var selected_currency_code = $("#select_currency").val();
                
                <?php
                	$url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=EUR";	
					$rates_in_eur = file_get_contents($url);
					$rates_in_eur = json_decode($rates_in_eur, true);
					$rates_in_eur = $rates_in_eur[0];

					/// Rates in GBP
					$url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=GBP";	
					$rates_in_gbp = file_get_contents($url);
					$rates_in_gbp = json_decode($rates_in_gbp, true);
					$rates_in_gbp = $rates_in_gbp[0];
					
					
					/// Rates in JPY
					$url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=JPY";	
					$rates_in_jpy = file_get_contents($url);
					$rates_in_jpy = json_decode($rates_in_jpy, true);					
					$rates_in_jpy = $rates_in_jpy[0];
					//var_dump($rates_in_jpy);
	
					
					/// Rates in BTC
					$url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=BTC";	
					$rates_in_btc = file_get_contents($url);
					$rates_in_btc = json_decode($rates_in_btc, true);					
					$rates_in_btc = $rates_in_btc[0];
					// var_dump($rates_in_btc);
					// if($i >2) break;


					?> 

					
					
				// alert(selected_currency_code);
				 
				 var previous_selection =  $('#current_selection').val();
				 
				 $('#current_selection').val(selected_currency_code);
				 
				//alert(previous_selection+" - - "+selected_currency_code);
				 
				 //$(current_amountdiv).css('visibility','visible');
				 $(".market_"+previous_selection).hide();
				 $(".price_"+previous_selection).hide();
				 $(".volume_"+previous_selection).hide();
				 // $(".market_btc").show();
				 
				 $(".market_"+selected_currency_code).show();
				 $(".price_"+selected_currency_code).show();
				 $(".volume_"+selected_currency_code).show();
				 
				// $("#price_"+selected_currency_code).slideToggle("slow");
				// $("#price_"+previous_selection).slideToggle("slow");
			
			 })(jQuery);			
					
	}

</script>
<div class="mydiv">

<div class="innerdiv">
				<select class="selectbox" id="select_currency" onChange=""> <!--name="select_currency"  change_currency(this)-->
					
					<option value="usd">USD</option>
					<option value="eur">EUR</option>
					<option value="gbp">GBP</option>
					<option value="jpy">JPY</option>
					<option value="btc">BTC</option>
				</select>
				<input type="hidden" id="current_selection" value="usd"/>
			</div>

<div class="innerdiv">

<table width="100%" align="left" cellpadding="5px" cellspacing="0" border="1" style="border-collapse:collapse; border-color:#ccc;">
   <thead>
  <tr>
    <th height="30">&nbsp;</th>
    <th>#</th>
    <th>Name</th>
    <th>Symbol</th>
    <th>Market Cap</th>
    <th>Price</th>
    <th>Volum(24h)</th>
    <th>Circulating Supply</th>
  </tr>
  </thead>
   
 <tfoot>
  
   
             <?php $i=$start+1; foreach($rates as $coin){
							 

					//Rates in EUR
				//	$url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=EUR";	
				//	$rates_in_eur = file_get_contents($url);
				//	$rates_in_eur = json_decode($rates_in_eur, true);
				//	$rates_in_eur = $rates_in_eur[0];
					
					
					/// Rates in GBP
					// $url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=GBP";	
					// $rates_in_gbp = file_get_contents($url);
					// $rates_in_gbp = json_decode($rates_in_gbp, true);
					// $rates_in_gbp = $rates_in_gbp[0];
					
					
					// /// Rates in JPY
					// $url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=JPY";	
					// $rates_in_jpy = file_get_contents($url);
					// $rates_in_jpy = json_decode($rates_in_jpy, true);					
					// $rates_in_jpy = $rates_in_jpy[0];
					// //var_dump($rates_in_jpy);
	
					
					// /// Rates in BTC
					// $url = "https://api.coinmarketcap.com/v1/ticker/".$coin['id']."/?convert=BTC";	
					// $rates_in_btc = file_get_contents($url);
					// $rates_in_btc = json_decode($rates_in_btc, true);					
					// $rates_in_btc = $rates_in_btc[0];
					// var_dump($rates_in_btc);
					// if($i >2) break;

			 ?>
  
  <tr>
    <td style="text-align:center;"><li id="flipicon<?php echo $i; ?>" class="fa fa-plus-square" style="cursor:pointer" onClick="showccDiv(<?php echo $i; ?>);"></li></td>
    <td><?php echo $i; ?></td>
    <td><?php echo $coin['name']; ?></td>
    <td><?php echo $coin['symbol']; ?></td>
    <td> 
    
    <span class="market_usd"><?php echo "$".$coin['market_cap_usd']; ?></span>
       <span class="market_eur hideitem">&euro; <?php echo $rates_in_eur['market_cap_eur']; ?></span>
       <span class="market_gbp hideitem">&pound; <?php echo $rates_in_gbp['market_cap_gbp']; ?></span>
       <span class="market_jpy hideitem">&yen; <?php echo $rates_in_jpy['market_cap_jpy']; ?></span>
       <span class="market_btc hideitem"><?php echo $rates_in_btc['market_cap_btc']; ?> BTC</span>
        </td>
    <td> 
    
    <span  class="price_usd"><?php echo "$".$coin['price_usd']; ?></span>
    <span class="price_eur hideitem">&euro; <?php echo $rates_in_eur['price_eur']; ?></span>
    <span class="price_gbp hideitem">&pound; <?php echo $rates_in_gbp['price_gbp']; ?></span>
    <span class="price_jpy hideitem">&yen; <?php echo $rates_in_jpy['price_jpy']; ?></span> 
    <span class="price_btc hideitem"><?php echo $rates_in_btc['price_btc']; ?> BTC</span>
    
    </td>
    <td>
    <span  class="volume_usd"><?php echo "$".$coin['24h_volume_usd']; ?></span>
    <span class="volume_eur hideitem">&euro; <?php echo $rates_in_eur['24h_volume_eur']; ?></span>
    <span class="volume_gbp hideitem">&pound; <?php echo $rates_in_gbp['24h_volume_gbp']; ?></span>
    <span class="volume_jpy hideitem">&yen; <?php echo $rates_in_jpy['24h_volume_jpy']; ?></span>
    <span class="volume_btc hideitem"><?php echo $rates_in_btc['24h_volume_btc']; ?> BTC</span>
    
    </td>
    <td><?php echo $coin['total_supply']; ?></td>
  </tr>
  
  
  <tr  class="thirdHeader" id="ccpanel<?php echo $i; ?>">
    <td colspan="8">
           		<strong>% 1hr:</strong> <?php echo "$".$coin['percent_change_1h']; ?><br/>
               <strong> % 24hr:</strong> <?php echo "$".$coin['24h_volume_usd']; ?><br/>
                <strong>% 7d: </strong><?php echo "$".$coin['percent_change_7d']; ?>
            </td>
  </tr>
  
  <?php $i++;} ?>
  </tfoot>
  
</table>

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


<?php //do_action('qodef_page_after_container') ?>
	<?php //get_footer(); ?>
