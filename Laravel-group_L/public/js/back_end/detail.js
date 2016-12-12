$(document).ready(function(){
	$("#category-type").on("change", function(){
		var value = $("#category-type").val();
		debugger;
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
				if(length_data_return==0)
				{
					return;
				}		
				var detailcategory = $("#detailcategory");
				detailcategory.empty();
				var count_product = 0;
				while(count_product < length_data_return){
					var q = data[count_product],
						id = q.detail_id,
						title = q.detail_title;
						debugger;
						s = "";
                        s+=' <option value="{ tt }"> { tt } </option>'
                   
						s = s.replace(/\{tt\}/g, title);
					detailcategory.append(s);	
					count_product++;   
				}
			}
		});
	}
});