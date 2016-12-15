$(document).ready(function(){
	$("#category-type").on("change", function(){
		var value = $("#category-type").val();
		//debugger;
		loadDetailType(value);
	});

	function loadDetailType(value){
		$.ajax({
			dataType: "json",
			url:"/getDetailTypeDynamicData" ,
			data: {
				type: value
			},
			beforeSend: function() {
			},
			success: function(data){
				var length_data_return = data.length;	
				if(length_data_return==0){ return; }
				var detailcategory = $("#detailcategory");
				detailcategory.empty();
				var count_product = 0;
				s = "";
				while(count_product < length_data_return){
					var q = data[count_product],
						id = q.detail_id,
						title = q.detail_title;

                        s+=' <option value="' + title + '">' + title + '</option>'
						//s = s.replace(/\{title\}/g, title);
					count_product++;
				}
				if(s != ""){
					detailcategory.append(s);
				}
			},
			/*error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }*/
		});
	}
});