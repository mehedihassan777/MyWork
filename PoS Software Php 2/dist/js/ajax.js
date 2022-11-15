jQuery(document).ready(function(){
	invoiceGenerate();
	jQuery(document).on("keyup","#barcode",function(){
		var barcode = jQuery(this).val();
		var action = "findItem";
		if(barcode == "")
			jQuery("#costPrice").val("");
		else{
			jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'barcode':barcode,
				'action':action
			},
			success:function(res){
				if(res == null){

				}
				else{
					jQuery("#costPrice").val(res.costPrice);
					jQuery("#product_id").val(res.id);

					showStock(res.id);
				}
				
			}
		});
		}
		
	});

	function showItem(){
		var invoice = jQuery("#invoice").val();
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'invoice': invoice,
				'action': "showItem"
			},
			success:function(res){
				jQuery(".tdata").html(res);
			}
		});
	}

	function showSItem(){
		var invoice = jQuery(".invoice").val();
		//var invoice = "2022004";
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'invoice': invoice,
				'action': "showSItem"
			},
			success:function(res){
				jQuery(".stdata").html(res);
			}
		});
	}

	function showStock(product_id){
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'product_id':product_id,
				'action':"showStock"
			},
			success:function(res){
				if(res==null){
					jQuery("#stock").val("");
					jQuery(".stock").val("");
				}
				else{
					jQuery("#stock").val(res.qnt);
					jQuery(".stock").val(res.qnt);
				}
				
			}
		});
	}

	function totalQnt(){
		var invoice = jQuery("#invoice").val();
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'invoice':invoice,
				'action':"totalQnt"
			},
			success:function(res){
				jQuery("#totalQnt").val(res);
			}
		});
	}

	function invoiceGenerate(){
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'action': "findInvoice"
			},
			success:function(res){
				if(res == 0)
					jQuery(".invoice").val("2022001");
				else{
					var invoice = parseInt(res);
					invoice = invoice + 1;
					jQuery(".invoice").val(invoice);
				}
			}
		});
	}

	function totalAmount(){
		var invoice = jQuery("#invoice").val();
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'invoice':invoice,
				'action':"totalAmount"
			},
			success:function(res){
				jQuery("#totalAmount").val(res);
			}
		});
	}

	function totalSAmount(){
		var invoice = jQuery(".invoice").val();
		//var invoice = "2022004";
		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'invoice':invoice,
				'action':"totalSAmount"
			},
			success:function(res){
				jQuery(".totalAmount").val(res.amount);
				jQuery(".totalQnt").val(res.qnt);
			}
		});
	}

	jQuery(document).on("keyup","#quantity",function(){
		var qnt = jQuery(this).val();
		var total = qnt * jQuery("#costPrice").val();
		jQuery("#total").val(total);
	});

	jQuery(document).on("keyup",".qnt",function(){
		var qnt = jQuery(this).val();
		var total = qnt * jQuery(".price").val();
		jQuery(".total").val(total);
	});

	jQuery(".addItem").click(function(){
		var pdate = jQuery("#pdate").val();
		var cName = jQuery("#cname").val();
		var invoice = jQuery("#invoice").val();
		var product_id = jQuery("#product_id").val();
		var barcode = jQuery("#barcode").val();
		var price = jQuery("#costPrice").val();
		var qnt = jQuery("#quantity").val();
		var total = jQuery("#total").val();

		jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'action' : "addItem",
				'pdate' : pdate,
				'cName' : cName,
				'invoice' : invoice,
				'product_id' : product_id,
				'barcode' : barcode,
				'price':price,
				'qnt' : qnt,
				'total' : total
			},
			success:function(res){
				alert(res);
				showItem();
				totalQnt();
				totalAmount();
			}
		});
	});
			// *** Delete Item ***
	jQuery(document).on("click",".remove",function(){
		var id = jQuery(this).val();

		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'id': id,
				'action': "removeItem"
			},
			success:function(res){
				showItem();
				totalQnt();
				totalAmount();
				alert(res);
			}
		});
	});

			// *** Delete Sales Item ***
	jQuery(document).on("click",".sremove",function(){
		var id = jQuery(this).val();

		$.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'id': id,
				'action': "sremoveItem"
			},
			success:function(res){
				showSItem();
				totalSAmount();
				alert(res);
			}
		});
	});
			// *** Auto Discount calculation on Change ***
	jQuery(document).on("change","#dis",function(){
		var dis = jQuery(this).val();
		var total = jQuery("#totalAmount").val();
		var disAma = (dis * total)/100;
		var gtotal = total - disAma ;
		jQuery("#disAmount").val(disAma);
		jQuery("#grandTotal").val(gtotal);
	});

		// *** Auto Due calculation on Keypu ***

	jQuery(document).on("keyup","#pay",function(){
		var pay = jQuery(this).val();
		var total = jQuery("#grandTotal").val();
		var due = pay - total ;
		jQuery("#due").val(due);
	});

	// *** Save Data on tbl_purchese_summery ***

	jQuery(document).on("click","#save",function(){
		var pdate = jQuery("#pdate").val();
		var company = jQuery("#cname").val();
		var invoice = jQuery("#invoice").val();
		var total_quantity = jQuery("#totalQnt").val();
		var total_price = jQuery("#totalAmount").val();
		var dis = jQuery("#dis").val();
		var dis_amaunt = jQuery("#disAmount").val();
		var grand_total = jQuery("#grandTotal").val();
		var pay = jQuery("#pay").val();
		var due = jQuery("#due").val();
		var action = "insertSummery";

		jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'action': action,
				'pdate': pdate,
				'company': company,
				'invoice': invoice,
				'total_quantity': total_quantity,
				'total_price': total_price,
				'dis':dis,
				'dis_amaunt': dis_amaunt,
				'grand_total': grand_total,
				'pay': pay,
				'due': due

			},
			success:function(res){
				alert(res);
				window.location.replace("purchasemanage.php");

			}
		});
	});

	jQuery(document).on("keyup",".barcode",function(){
		var barcode = jQuery(this).val();
		var action = "findItem";
		if(barcode == "")
			jQuery(".costPrice").val("");
		else{
			jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'barcode':barcode,
				'action':action
			},
			success:function(res){
				if(res == null){

				}
				else{
					jQuery(".price").val(res.salePrice);
					jQuery(".product_id").val(res.id);

					showStock(res.id);
				}
				
			}
		});
		}
		
	});

	jQuery(".saddItem").click(function(){
		var date = new Date;
		var m = date.getMonth();
		m = m+1;
		var d = date.getFullYear()+"-"+m+"-"+date.getDate();
		var sdate = d;
		var invoice = jQuery(".invoice").val();
		var product_id = jQuery(".product_id").val();
		var sale_price = jQuery(".price").val();
		var qnt = jQuery(".qnt").val();
		var total_amount = jQuery(".total").val();

		jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'action' : "sAddItem",
				'sdate' : sdate,
				'invoice' : invoice,
				'product_id' : product_id,
				'sale_price' : sale_price,
				'qnt' : qnt,
				'total_amount' : total_amount
			},
			success:function(res){
				alert(res);
				showSItem();
				totalSAmount();
			}
		});
	});

	jQuery(".ssave").click(function(){
		var date = new Date;
		var m = date.getMonth();
		m = m+1;
		var d = date.getFullYear()+"-"+m+"-"+date.getDate();
		var sdate = d;
		var invoice = jQuery(".invoice").val();
		var xinvoice = invoice*45;
		var total_quantity = jQuery("#totalQnt").val();
		var total_price = jQuery("#totalAmount").val();
		var dis = jQuery("#dis").val();
		var dis_amaunt = jQuery("#disAmount").val();
		var grand_total = jQuery("#grandTotal").val();
		var pay = jQuery("#pay").val();
		var due = jQuery("#due").val();
		var action = "insertSalesSummery";

		jQuery.ajax({
			url:"././classes/functions.php",
			type:"POST",
			data:{
				'action': action,
				'sdate': sdate,
				'invoice': invoice,
				'total_quantity': total_quantity,
				'total_price': total_price,
				'dis':dis,
				'dis_amaunt': dis_amaunt,
				'grand_total': grand_total,
				'pay': pay,
				'due': due

			},
			success:function(res){
				alert(res);
				window.location.replace("saleprint.php?inv="+xinvoice);
			}
		});
	})

})