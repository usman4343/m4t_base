 <?php 
/*
Template Name: Pricing Plan
*/ 
?>
<?php get_header(); ?>

	<style type="text/css">
/*--------- Font ------------*/
@import url(http://fonts.googleapis.com/css?family=Droid+Sans);
@import url(https://mining4truth.com/wp-content/themes/bridge/css/weloveiconfonts.css);
/* fontawesome */

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

* {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.q_logo a
{
	visibility: visible!important;
    height: 56px !important;
}
.wrapper
{
	    background: #F2F2F2;
}
.content {
    margin-top: 110px;
}
/*------ utiltity classes -----*/
.fl{ float:left; }
.fr{ float: right; }
/*its also known as clearfix*/
.group:before,
.group:after {
    content: "";
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;  /*For IE 6/7 (trigger hasLayout) */
}

body {
    background: #F2F2F2;
    font-family: 'Droid Sans', sans-serif;
    line-height: 1;
    font-size: 16px;    
}
.wrapper {
    
}
.pricing-table {
    width: 80%;
    margin: 50px auto;
    text-align: center;
    padding: 10px;
    padding-right: 0;
}
.pricing-table .heading{
    color: #9C9E9F;
    text-transform: uppercase;
    font-size: 1.3rem;
    margin-bottom: 4rem;
}
.block{
    width: 30%;    
    margin: 0 15px;
    overflow: hidden;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;    
/*    border: 1px solid red;*/
}
/*Shared properties*/
.title,.pt-footer{
    color: #FEFEFE;
    text-transform: capitalize;
    line-height: 2.5;
    position: relative !important;
    font-size: 18px;
    font-weight: normal;
    letter-spacing: normal;
	    width: auto;
    height: auto;
    text-align: center;
    z-index: auto;
}
.desc{
    position: relative;
    color: #FEFEFE;
    padding: 55px 0 10px 0;
}
/*arrow creation*/
.desc:after, .desc:before,.pt-footer:before,.pt-footer:after {
	top: 100%;
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.pt-footer:after,.pt-footer:before{
    top:0;
}
.desc:after,.pt-footer:after {
	border-color: rgba(136, 183, 213, 0);	
	border-width: 5px;
	margin-left: -5px;
}
/*/arrow creation*/
.price{
    position: relative;
    display: inline-block;
    margin-bottom: 0.625rem;
	    color: white;
}
.price span{    
    font-size: 6rem;
    letter-spacing: 8px;
    font-weight: bold;        
}
.price sup{
    font-size: 1.5rem;    
    position: absolute;    
    top: 12px;
    left: -12px;
}
.hint{
    font-style: italic;
    font-size: 0.9rem;
}
.features{
    list-style-type: none;    
    background: #FFFFFF;
    text-align: left;
    color: #9C9C9C;
    padding:30px 15%;
    font-size: 0.9rem;
	min-height: 30px;
}
.features li{
    padding:15px 0;
    width: 100%;
}
.features li span{
   padding-right: 0.4rem; 
}
.pt-footer a{
	color: white;
    font-size: 16px;
    font-weight: bold;
}	
.pt-footer{
    font-size: 0.95rem;
    text-transform: capitalize;
	padding: 10px 0px;
}
/*PERSONAL*/
.personal .title{        
    background: #78CFBF;    
}
.personal .desc,.personal .pt-footer{
    background: #82DACA;
}
.personal .desc:after{	
	border-top-color: #82DACA;	
}
.personal .pt-footer:after{
    border-top-color: #FFFFFF;
}
/*PROFESSIONAL*/
.professional .title{
    background: #3EC6E0;
}
.professional .desc,.professional .pt-footer{
    background: #53CFE9;
}
.professional .desc:after{	
	border-top-color: #53CFE9;	
}
.professional .pt-footer:after{
    border-top-color: #FFFFFF;
}
/*BUSINESS*/
.business .title{
    background: #E3536C;
}
.business .desc,.business .pt-footer{
    background: #EB6379;
}
.business .desc:after{	
	border-top-color: #EB6379;	
}
.business .pt-footer:after {	
	border-top-color: #FFFFFF;	
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>


jQuery.noConflict();
	(function( $ ) {

		$(document).ready(function(){
								   
		/// for accademy package
								   
		   var basicprice = 1500;
		   var saving = '0000';
								   
			$("#basicdiv").click(function(){
				
				showamount('monthly',basicprice,saving,'academy','basic','1683'); // for accademy basic
				
				/// highlite selection and un highlight other options
				$("#basicdiv").addClass( "active" );
				$( "#goldbtn,#goldplusbtn" ).removeClass("active");
				
				
				if($("#goldpluspanel").css("display") == 'block'){
					$(".pricespan-acc-gold-plus").removeClass( "fontawesome-minus-sign" );
					$(".pricespan-acc-gold-plus").addClass( "fontawesome-plus-sign" );
					$("#goldpluspanel").slideToggle(); 
				}
				
				
				if($("#goldpanel").css("display") == 'block'){
						$(".pricespan-acc-gold").removeClass( "fontawesome-minus-sign" );
						$(".pricespan-acc-gold").addClass( "fontawesome-plus-sign" );
						$("#goldpanel").slideToggle();
				}	
				
			});
								   
			$("#goldbtn").click(function(){
										 
				
				if($("#goldpanel").css("display") == 'block'){
				
					$(".pricespan-acc-gold").removeClass( "fontawesome-minus-sign" );
					$(".pricespan-acc-gold").addClass( "fontawesome-plus-sign" );
				}
				else
				{
					$(".pricespan-acc-gold").removeClass( "fontawesome-plus-sign" );
					$(".pricespan-acc-gold").addClass( "fontawesome-minus-sign" );
				}
				$("#goldpanel").slideToggle();
				
				if($("#goldpluspanel").css("display") == 'block'){$("#goldpluspanel").slideToggle();
				$(".pricespan-acc-gold-plus").removeClass( "fontawesome-minus-sign" );
				$(".pricespan-acc-gold-plus").addClass( "fontawesome-plus-sign" );
				}// hide other panel if displayed
				
				/// highlite selection and un highlight other options
				$("#goldbtn,#academy_gold_monthly").addClass( "active" );
				$( "#goldplusbtn,#basicdiv" ).removeClass("active");
				
				
				
				
			});
			
			$("#goldplusbtn").click(function(){
											 
											 
				
				
				if($("#goldpluspanel").css("display") == 'block'){
						// for _ and + sign
					$(".pricespan-acc-gold-plus").removeClass( "fontawesome-minus-sign" );
					$(".pricespan-acc-gold-plus").addClass( "fontawesome-plus-sign" );
				
				}
				else
				{
					$(".pricespan-acc-gold-plus").removeClass( "fontawesome-plus-sign" );
					$(".pricespan-acc-gold-plus").addClass( "fontawesome-minus-sign" );
				}
				$("#goldpluspanel").slideToggle();
				
				if($("#goldpanel").css("display") == 'block'){$("#goldpanel").slideToggle();
				$(".pricespan-acc-gold").removeClass( "fontawesome-minus-sign" );
				$(".pricespan-acc-gold").addClass( "fontawesome-plus-sign" );
				}	
				
				/// highlite selection and un highlight other options
				$("#goldplusbtn,#academy_gold_plus_monthly").addClass( "active" );
				$( "#goldbtn,#basicdiv" ).removeClass("active");
				
			
				//alert($("#goldpluspanel" ).find( "span" ).hasClass("active"));
				//if($("#goldpluspanel" ).find( "span" ).hasClass("active") == false)
				//{
					//alert(1);
					//$( "#goldplusbtn span" ).first().trigger( "click" );
					//$( "#foo" ).trigger( "click" );
					

				//}
			});
			
			
			// update prices if option is clicked or update default first option if heading is clicked  
			$(".pricespan,.pricespan-acc-gold,.pricespan-acc-gold-plus").click(function(){ // for accademy gold and accademy gold plus
				
				//alert($( this ).attr( "name" ));
				var tempprice = $( this ).attr( "price" );
				tempprice = +tempprice + +basicprice;
				var tempsaving = $( this ).attr( "saving" );
				var hidden_value = $( this ).attr( "name" );
				var packagename = $( this ).attr( "package" );
				var variation_id = $( this ).attr( "variation_id" );
				var option_value = tempprice+'-'+tempsaving;
				$("#academy_options_value").val(option_value);
				var hidden_field = "academy"; 
				//alert(variation_id);
				
				// close div only if option is clicked, not heading
				if($(this).hasClass("pricespan") && packagename == 'academy_gold')
				{
					
					
					$(".pricespan-acc-gold").removeClass( "fontawesome-minus-sign" );
					$(".pricespan-acc-gold").addClass( "fontawesome-plus-sign" );
					$("#goldpanel").slideToggle();
				}
				else if($(this).hasClass("pricespan") && packagename == 'academy_gold_plus')
				{
					
					
					$(".pricespan-acc-gold-plus").removeClass( "fontawesome-minus-sign" );
					$(".pricespan-acc-gold-plus").addClass( "fontawesome-plus-sign" );
					$("#goldpluspanel").slideToggle();
				}
				
				
				showamount(hidden_value,tempprice,tempsaving,hidden_field,hidden_value,variation_id); 
				
				
			});
			
			
			/// end for accademy package
			
			
			// select boxes are removed now
			$(".packages_selectbox").change(function(){ /// for all other select boxes
													 //alert(1);
				var selectboxid = $( this ).attr( "id" );
				//var vid = $( this ).attr( "variation_id" ); alert(vid);
				var selectbox = "#"+selectboxid;
				var temp = $(selectbox).val();
				if(temp != ''){
					var res = temp.split("-");
					//alert(selectbox);
					var hidden_field = selectboxid;
					var hidden_value = temp;
					showamount(res[0],res[1],res[2],hidden_field,hidden_value,res[3]);
				}
				else
				{
					var current_amountdiv = "#"+selectboxid+"_savingdiv";
					 var disp = $(current_amountdiv).css("visibility");
					 //alert(disp);
					 if(disp == 'hidden'){$(current_amountdiv).css('visibility','visible');}
				}
				
			
				
			});
			
			
			
			/// shows amount and saving - update hidden field and  cart button link
			function showamount(package_option,price,saving,hidden_field,hidden_value,variation_id)
			{
			
				
				var current_hidden_field = "#"+hidden_field+"_options";
				var current_pricediv = "#"+hidden_field+"_pricediv";
				var current_savingdiv = "#"+hidden_field+"_savingdiv";
				var current_amountdiv = "#"+hidden_field+"_savingdiv";
				//alert(current_pricediv+'--'+current_savingdiv+'--'+current_hidden_field+'--'+current_savingdiv+'--'+current_amountdiv);
				$(current_hidden_field).val(hidden_value);
				
				
				///update price and saving
					 
				 if(package_option == 'yearly')
				 	$duration = '/yr';
				 else if(package_option == 'quarterly')
					$duration = '/qu';
				 else if(package_option == 'half_year')
					 $duration = '/hy';
				  else 
					$duration = '/mo';
				
				$( current_pricediv ).html('<sup>$</sup><span>'+price+'</span><sub>'+$duration+'.</sub>');
				$( current_savingdiv ).html( "You Saved $"+saving+"" );
				
				
				 var disp = $(current_amountdiv).css("visibility");
				 //alert(disp);
				 if(disp == 'hidden'){$(current_amountdiv).css('visibility','visible');}
				 
				//$( "#amountdiv").slideDown('slow');
				
				
				/// update cart button link
				
				var product_id = '';
				if(hidden_field == 'gold')
					 product_id = 1179;
				 else if(hidden_field == 'gold_unlimited')
					product_id = 1180;
				 else if(hidden_field == 'individual_trade')
					 product_id = 1182;
				  else if(hidden_field == 'academy')
					 product_id = 1181;
			
				
				var package_btn_id = "#"+hidden_field+"_package_button";
			
				var buttonlink = "https://mining4truth.com/cart/?add-to-cart="+product_id+"&variation_id="+variation_id+"";
				
				
				$(package_btn_id).attr("href", buttonlink);
				//package_button
				
				//alert(package_btn_id);
				
			}
			
			
			function toggledivs(activeid)
			{
				//$( "#".activeid ).removeClass();
				//$(activeid).addClass( "active" );
				//$( "#basicdiv" ).removeClass("active");
				///$( "#goldbtn" ).removeClass("active");
				//$( "#goldplusbtn" ).removeClass("active");
			}
			
			
			
			/// for all other accordions i-e, gold, gold unlimited, individual trade
			
			$(".selectbtn").click(function(){
											 
				
				var buttonid = $( this ).attr( "id" );
				
				if($("#"+buttonid+"_panel").css("display") == 'block'){
						// for _ and + sign
					$(".icon_span_"+buttonid).removeClass( "fontawesome-minus-sign" );
					$(".icon_span_"+buttonid).addClass( "fontawesome-plus-sign" );
				
				}
				else
				{
					$(".icon_span_"+buttonid).removeClass( "fontawesome-plus-sign" );
					$(".icon_span_"+buttonid).addClass( "fontawesome-minus-sign" );
				}
				$("#"+buttonid+"_panel").slideToggle();
				
				/// highlite selection and un highlight other options
				$("#"+buttonid).addClass( "active" );
				
				
			
			});
			
			
			$(".selectpricespan").click(function(){ // for accademy gold and accademy gold plus
													 
				var spanid = $( this ).attr( "id" );								 			
				//alert($( this ).attr( "name" ));
				var tempprice = $( this ).attr( "price" );
				var tempsaving = $( this ).attr( "saving" );
				var hidden_value = $( this ).attr( "name" );
				var packagename = $( this ).attr( "package" );
				var variation_id = $( this ).attr( "variation_id" );
				var hidden_field = packagename; 
				//alert(variation_id);
			
				$(".priceselect-"+packagename).removeClass( "fontawesome-minus-sign" );
				$(".priceselect"+packagename).addClass( "fontawesome-plus-sign" );
				$("#"+packagename+"_panel").slideToggle();
			
				// unhilight old selected option
				var selecteoption = $( "#selected_options_for_"+packagename ).val();
				$("#"+selecteoption).removeClass( "active" );
				
				// highlight new selected
				$( "#selected_options_for_"+packagename ).val( spanid );
					$("#"+spanid).addClass( "active" );
					
					
				showamount(hidden_value,tempprice,tempsaving,hidden_field,hidden_value,variation_id); 
				
				$(".icon_span_"+packagename).removeClass( "fontawesome-minus-sign");
				$(".icon_span_"+packagename).addClass( "fontawesome-plus-sign" );
				
			});
			
		});

})(jQuery);
</script>

<style>
.accordion {
    background-color: white;
    color: #9C9C9C;
    cursor: pointer;
    padding: 18px 0 18px 0;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    /*font-size: 15px;*/
    transition: 0.4s;
}

.active, .accordion:hover {
   color:black; 
}

.panel {
    /*padding: 0 18px;*/
    display: none;
    background-color: f8f8f8;
}
.amountdiv {
	/*display:none;*/
	visibility:hidden;
}
.savingdiv,.pricediv
{
	width:100px;
	display:inline-block;
	margin:10px;
	padding:5px;
	text-align:center;
	border-radius:2px;
}

.savingdiv
{
	background:#4CAF50;
	color:white;
	margin-left:60px;
}
.savingdiv:hover
{
	background:white;
	color:#4CAF50;
}
.pricediv
{
	/*background:#008CBA;
	background:black;
	color:white;
	*/
	width:150px;
}
.pricediv:hover
{
	/*background:white;
	background:black;
	color:#008CBA;*/
}

.pricespan,.selectpricespan
{
	display:block;
	padding:15px;
	cursor:pointer;
}
.pricespan:hover
{
	background:#ccc;
	color:black;
}

.packages_selectbox
{
	background:white !important;
	color: #9C9C9C;
	margin-bottom:10px;
	border: 1px solid #eee;
    padding: 10px;
    border-radius: 5px;
}

.pricediv .price
{
	 font-size: 60px;
    line-height: 60px;
    padding: 0 3px;
    font-weight: 700;
    vertical-align: middle;
    display: inline-block;
    color: #090909;
}

.icon-li icon-angle-down
{
	float:right;
}

.price_table_inner
{
	background: white;
    min-height: 400px;
    margin-bottom: 10px;
    padding-top: 30px;
    /* padding: 10px; */
    border-radius: 21px;
}
.qbutton 
{
	background-color: #dcac34;
    border-radius: 5px;
	 margin: 0 auto !important;
    display: table !important;
}
</style>
	<div class="wrapper" style="background: #F2F2F2;">
        <!-- PRICING-TABLE CONTAINER -->
        <div class="pricing-table group first-row">
            <h1 class="heading">
                Pricing overview
            </h1>
            <!-- free -->
            <div class="block personal fl">
                <h2 class="title">FREE</h2>
                <!-- CONTENT -->
                <div class="desc">
                    <p class="price">
                        <sup>$</sup>
                        <span>0</span>
                        <sub>/mo.</sub>
                    </p>
                    <p class="hint amountdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0;">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Articles</li>
                    <li><span class="fontawesome-star"></span>Learning Center</li>
                    <li><span class="fontawesome-dashboard"></span>Forum</li>
                    <li>&nbsp;</li>
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <a id="free_package_button" href="https://mining4truth.com/cart/?add-to-cart=1748">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /free -->
            
            
          
        
            <!-- Silver -->
            <div class="block professional fl">
                <h2 class="title">SILVER</h2>
                <!-- description -->
                <div class="desc">
                    <p class="price">
                        <sup>$</sup>
                        <span>22</span>
                        <sub>/mo.</sub>
                    </p>
                    <p class="hint amountdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0;">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Access to Premium Content</li>
                    <li><span class="fontawesome-star"></span>Access to our live online events.</li>
                    <li><span class="fontawesome-dashboard"></span>Access to our community</li>
                    <li><span class="fontawesome-cloud"></span>Access to library</li>
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                   <a href="https://mining4truth.com/cart/?add-to-cart=1168">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /Silver -->
            
                
              <!-- INDIVIDUAL TRADE -->
            <div class="block business fl">
                <h2 class="title">INDIVIDUAL TRADE</h2>
                <!-- CONTENT -->
                <div class="desc">
                    <p class="price" id="individual_trade_pricediv">
                        <sup>$</sup>
                        <span>99</span>
                        <sub>/mo.</sub>
                    </p>
                    <p id="individual_trade_savingdiv" class="hint  amountdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0; ">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->

                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Nullam fringilla urna</li>
                    <li><span class="fontawesome-star"></span>Cras viverra enim</li>
                    <li><span class="fontawesome-dashboard"></span>Phasellus gravida</li>
                   
            
                    
                    
                 <!--- for Individual trade recommendation :  -->
                    <form action="#" name="individual_trade_form" id="individual_trade_form"  class="package_form" method="post"><div  class="main_package_div">
                    <!--
                    <select name="individual_trade" id="individual_trade" class="packages_selectbox">
                    
                    <option value="1-99-0-1694">$ 99 USD </option>
                    <option value="2-189-10-1695">2 for $ 189 USD</option>
                    <option  value="3-277-20-1696">3 for $ 277 USD</option>
                    <option value="4-366-30-1697">4 for $ 366 USD </option>
                    <option value="5-455-40-1698">5 for $ 455 USD</option>
                    <option value="6-544-50-1699">6 for $ 544 USD</option>
                    <option value="7-633-60-1700">7 for $ 633 USD</option>
                    <option value="8-717-75-1701">8 for $ 717 USD</option>
                    <option value="9-808-83-1702">9 for $ 808 USD</option>
                    <option value="10-888-102-1703">10 for $ 888 USD</option>
                    </select>
                   -->
                                                
                              <button type="button" class="accordion selectbtn active" id="individual_trade"><span class="fontawesome-plus-sign icon_span_individual_trade" > Individual trade options &nbsp;</span><span class="fontawesome-angle-down" style="float: right;"></span></button>
                <div class="panel" id="individual_trade_panel">
                
                <span class="selectpricespan active" price="99" saving="0" name="1" package="individual_trade" variation_id="1694" id="individual_trade-1"><span class="fontawesome-minus-sign"></span> $ 99 USD</span>
                
                <span class="selectpricespan" price="189" saving="10" name="2" package="individual_trade" variation_id="1695" id="individual_trade-2"><span class="fontawesome-minus-sign"></span> 2 for $ 189 USD</span>
                
                <span class="selectpricespan" price="277" saving="20" name="3" package="individual_trade" variation_id="1696" id="individual_trade-3"><span class="fontawesome-minus-sign"></span> 3 for $ 277 USD</span>
                
                <span class="selectpricespan" price="366" saving="30" name="4" package="individual_trade" variation_id="1697" id="individual_trade-4"><span class="fontawesome-minus-sign"></span>   4 for $ 366 USD</span>
               
               
                <span class="selectpricespan" price="455" saving="40" name="5" package="individual_trade" variation_id="1698" id="individual_trade-5"><span class="fontawesome-minus-sign"></span>   5 for $ 455 USD</span>
                
                
                <span class="selectpricespan" price="544" saving="50" name="6" package="individual_trade" variation_id="1699" id="individual_trade-6"><span class="fontawesome-minus-sign"></span>   6 for $ 544 USD</span>
                
                
                <span class="selectpricespan" price="633" saving="60" name="7" package="individual_trade" variation_id="1700" id="individual_trade-7"><span class="fontawesome-minus-sign"></span>   7 for $ 633 USD</span>
                
                <span class="selectpricespan" price="717" saving="75" name="8" package="individual_trade" variation_id="1701" id="individual_trade-8"><span class="fontawesome-minus-sign"></span>   8 for $ 717 USD</span>
                
                
                <span class="selectpricespan" price="808" saving="83" name="9" package="individual_trade" variation_id="1702" id="individual_trade-9"><span class="fontawesome-minus-sign"></span>   9 for $ 808 USD</span>
                
                
                <span class="selectpricespan" price="888" saving="102" name="10" package="individual_trade" variation_id="1703" id="individual_trade-10"><span class="fontawesome-minus-sign"></span>   10 for $ 888 USD</span>
                
                </div> 
                   
                    <input type="hidden" name="individual_trade_options" id="individual_trade_options" value="" />
                     <input type="hidden" name="selected_options_for_individual_trade" id="selected_options_for_individual_trade" value="individual_trade-1" />
                    </div></form>
                    
                    
                </ul>
                <!-- /FEATURES -->

                <!-- PT-FOOTER -->
                <div class="pt-footer">
                   <a id="individual_trade_package_button" href="https://mining4truth.com/cart/?add-to-cart=1182&variation_id=1694">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /INDIVIDUAL TRADE -->
        
        
            
            
          
        </div>
        <!-- /PRICING-TABLE -->
		<div class="pricing-table group second-row">
        
           
              <!-- CRYPTO ACADEMY -->
            <div class="block professional fl">
                <h2 class="title">ACADEMY</h2>
                <!-- description -->
                <div class="desc">
                    <p class="price" id="academy_pricediv">
                        <sup>$</sup>
                        <span>1500</span>
                        <sub>/mo.</sub>
                    </p>
                    <p class="hint amountdiv" id="academy_savingdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0;display:block !important;">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                
                   <li><span class="fontawesome-cog"></span>Silver subscription</li>
                    <li><span class="fontawesome-star"></span>Gold Subscription</li>
                    <li><span class="fontawesome-dashboard"></span>Astrology trading</li>
                    <li><span class="fontawesome-asterisk"></span>Autotrader</li>
                    <li><span class="fontawesome-copy"></span>Crypto Academy</li>
                    <li><span class="fontawesome-link"></span>Consulting 101</li>
                                                      
                <!--- for Accademy Box :  -->
                
                <form action="#" name="academy_package_form" id="academy_package_form" class="package_form" method="post">
                <div class="main_package_div">
                
                
                <div  class="accordion active" id="basicdiv"><span class="fontawesome-minus-sign"></span> Academy only $1500</div>
                
                
                <button type="button" class="accordion" id="goldbtn"><span class="fontawesome-plus-sign pricespan-acc-gold" price="199" saving="100" name="monthly" package="academy_gold" variation_id="1684"> Basic  gold trade &nbsp;</span><span class="fontawesome-angle-down" style="float: right;"></span></button>
                <div class="panel" id="goldpanel">
                
                <span class="pricespan" price="199" saving="100" name="monthly" package="academy_gold" variation_id="1684" id="academy_gold_monthly"><span class="fontawesome-minus-sign"></span> Monthly $199 + $1500</span>
                <span class="pricespan" price="747" saving="250" name="quarterly" package="academy_gold" variation_id="1685"><span class="fontawesome-minus-sign"></span> Quarterly $747 + $1500</span>
                <span class="pricespan" price="1194" saving="700" name="half_year" package="academy_gold" variation_id="1686"><span class="fontawesome-minus-sign"></span> Half year $1194 + $1500</span>
                <span class="pricespan" price="1788" saving="1600" name="yearly" package="academy_gold" variation_id="1687"><span class="fontawesome-minus-sign"></span>   Full year $1788 + $1500</span>
                
                </div>
                
                
                <button type="button" class="accordion" id="goldplusbtn" ><span class="fontawesome-plus-sign  pricespan-acc-gold-plus" price="549" saving="150" name="monthly" package="academy_gold_plus"  variation_id="1688"> Gold unlimited trade &nbsp;<span class="fontawesome-angle-down" style="float: right;"></span></span></button>
                <div class="panel" id="goldpluspanel">
                
                <span class="pricespan" price="549" saving="150" name="monthly" package="academy_gold_plus"  variation_id="1688" id="academy_gold_plus_monthly"><span class="fontawesome-minus-sign"></span> Monthly $549 + $1500</span>
                <span class="pricespan" price="1947" saving="300" name="quarterly" package="academy_gold_plus"  variation_id="1689"><span class="fontawesome-minus-sign"></span> Quarterly $1947 + $1500</span>
                <span class="pricespan" price="3594" saving="750" name="half_year" package="academy_gold_plus"  variation_id="1690"><span class="fontawesome-minus-sign"></span> Half year $3594 + $1500</span> 
                <span class="pricespan" price="6708" saving="1650" name="yearly" package="academy_gold_plus"  variation_id="1691"><span class="fontawesome-minus-sign"></span> Full year $6708 + $1500</span>
                </div>
          
                
                <input type="hidden" name="academy_options" id="academy_options" value="" />
                <input type="hidden" name="academy_options_value" id="academy_options_value" value="" />
                
                
                </div>
                </form>
                
                  
                  
                     <li></li>
                    
                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                    <a id="academy_package_button" href="https://mining4truth.com/cart/?add-to-cart=1181&variation_id=1683">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /CRYPTO ACADEMY -->
         
          <!-- GOLD -->
            <div class="block business fl">
                <h2 class="title">GOLD</h2>
                <!-- CONTENT -->
                <div class="desc">
                    <p class="price" id="gold_pricediv" >
                        <sup>$</sup>
                        <span>299</span>
                        <sub>/mo.</sub>
                    </p>
                    <p class="hint amountdiv" id="gold_savingdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0;">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->

                <!-- FEATURES -->
                <ul class="features">
                     <li><span class="fontawesome-cog"></span>Includes all of SILVER subscription</li>
                    <li><span class="fontawesome-star"></span>Access to trading recommendations</li>
                    <li><span class="fontawesome-dashboard"></span>ico & coin tracking</li>
                    
                    
                         
               
                   
                    <!--- for Gold membership  :  -->
                    <form action="#" name="gold_form" id="gold_form"  class="package_form" method="post"><div  class="main_package_div">
             
                   <!-- 
                    <select name="gold" id="gold" class="packages_selectbox">
                    
                    <option value="monthly-299-0-1704">Monthly $299 </option>
                    <option value="quarterly-747-150-1705">Quarterly $747</option>
                    <option  value="half_year-1194-600-1706">Half year $1194</option>
                    <option value="yearly-1788-1500-1707"> Yearly $1788</option>
                    
                    </select>
                    -->
                    
                     
                <button type="button" class="accordion selectbtn active" id="gold"><span class="fontawesome-plus-sign icon_span_gold" price="199" saving="100" name="monthly" package="academy_gold" variation_id="1684"> Gold options &nbsp;</span><span class="fontawesome-angle-down" style="float: right;"></span></button>
                <div class="panel" id="gold_panel">
                
                <span class="selectpricespan active" price="299" saving="0" name="monthly" package="gold" variation_id="1704" id="gold-monthly"><span class="fontawesome-minus-sign"></span> Monthly $299</span>
                <span class="selectpricespan" price="747" saving="150" name="quarterly" package="gold" variation_id="1705" id="gold-quarterly"><span class="fontawesome-minus-sign"></span> Quarterly $747</span>
                <span class="selectpricespan" price="1194" saving="600" name="half_year" package="gold" variation_id="1706" id="gold-half_year"><span class="fontawesome-minus-sign"></span> Half year $1194</span>
                <span class="selectpricespan" price="1788" saving="1500" name="yearly" package="gold" variation_id="1707" id="gold-yearly"><span class="fontawesome-minus-sign"></span>   Yearly $1788</span>
                
                </div>
                
                
                
                    <input type="hidden" name="gold_options" id="gold_options" value="" />
                     <input type="hidden" name="selected_options_for_gold" id="selected_options_for_gold" value="gold-monthly" />
                    </div></form>
                </ul>
                <!-- /FEATURES -->

                <!-- PT-FOOTER -->
                <div class="pt-footer">
                  <a id="gold_package_button" href="https://mining4truth.com/cart/?add-to-cart=1182&variation_id=1704">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /GOLD -->
            
            
            <!-- GOLD UNLIMITED -->
            <div class="block personal fl">
                <h2 class="title">GOLD UNLIMITED</h2>
                <!-- CONTENT -->
                <div class="desc">
                    <p class="price"  id="gold_unlimited_pricediv">
                        <sup>$</sup>
                        <span>799</span>
                        <sub>/mo.</sub>
                    </p>
                    <p class="hint amountdiv" id="gold_unlimited_savingdiv" style="font-weight: normal;background: black;color: #fbd0d0;font-size: 16px;padding: 4px 0;">You Saved 0000</p>
                </div>
                <!-- /CONTENT -->
                <!-- FEATURES -->
                <ul class="features">
                    <li><span class="fontawesome-cog"></span>Nullam fringilla urna</li>
                    <li><span class="fontawesome-star"></span>Cras viverra enim</li>
                    <li><span class="fontawesome-dashboard"></span>Phasellus gravida</li>
                
                                    
                <!--- for Gold Unlimited :  -->
                <form action="#" name="gold_unlimited_form" id="gold_unlimited_form"  class="package_form" method="post"><div  class="main_package_div">
               <!-- 
                <select name="gold_unlimited" id="gold_unlimited" class="packages_selectbox">
                
                <option value="monthly-799-0-1708" variation_id = "1241">Monthly $799  </option>
                <option value="quarterly-2247-150-1709">Quarterly $2247 </option>
                <option  value="half_year-4194-600-1710">Half year $4194</option>
                <option value="yearly-7788-1500-1711">Yearly $7788</option>
                </select>
               --> 
               
                 
                              <button type="button" class="accordion selectbtn active" id="gold_unlimited"><span class="fontawesome-plus-sign icon_span_gold_unlimited" price="199" saving="100" name="monthly" package="academy_gold_unlimited" variation_id="1684"> Gold unlimited options &nbsp;</span><span class="fontawesome-angle-down" style="float: right;"></span></button>
                <div class="panel" id="gold_unlimited_panel">
                
                <span class="selectpricespan active" price="799" saving="0" name="monthly" package="gold_unlimited" variation_id="1708" id="gold_unlimited-monthly"><span class="fontawesome-minus-sign"></span> Monthly $799</span>
                <span class="selectpricespan" price="2247" saving="150" name="quarterly" package="gold_unlimited" variation_id="1709" id="gold_unlimited-quarterly"><span class="fontawesome-minus-sign"></span> Quarterly $2247</span>
                <span class="selectpricespan" price="4194" saving="600" name="half_year" package="gold_unlimited" variation_id="1710" id="gold_unlimited-half_year"><span class="fontawesome-minus-sign"></span> Half year $4194</span>
                <span class="selectpricespan" price="7788" saving="1500" name="yearly" package="gold_unlimited" variation_id="1711" id="gold_unlimited-yearly"><span class="fontawesome-minus-sign"></span>  Yearly $7788</span>
                
                </div> 
                    
               
                <input type="hidden" name="gold_unlimited_options" id="gold_unlimited_options" value="" />
                 <input type="hidden" name="selected_options_for_gold_unlimited" id="selected_options_for_gold_unlimited" value="gold_unlimited-monthly" />
                </div></form>


                </ul>
                <!-- /FEATURES -->
                <!-- PT-FOOTER -->
                <div class="pt-footer">
                   <a id="gold_unlimited_package_button" href="https://mining4truth.com/cart/?add-to-cart=1180&variation_id=1708">Add to Cart</a>
                </div>
                <!-- /PT-FOOTER -->
            </div>
            <!-- /GOLD UNLIMITED -->
          
         
        </div>
        <!-- /PRICING-TABLE -->
    </div>
	
	<?php do_action('qodef_page_after_container') ?>
	<?php get_footer(); ?>