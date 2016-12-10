/*$(function getID() {  
    var dialog = document.getElementById('window');  
    document.getElementById('delete').onclick = function() {  
        dialog.show();
    };  
    document.getElementById('cancel').onclick = function() {  
        dialog.close();  
    };
    document.getElementById('ok').onclick = function() {  
    	var source = $(this).attr('source');
        $(document.getElementById('delete')).attr('href', source);
        dialog.close();  
    };
});*/
$(document).ready(function(){
    $('.submitDelete').click(function(){
        var id = $(this).attr('source');
        if (confirm("Delete confirm") == true){
            window.open(id, '_self');
        }
    });
});