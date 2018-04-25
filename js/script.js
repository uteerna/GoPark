$(document).ready(function(){
    $('#search').click(function(){
        var start = parseInt($('#start').val().replace(":",""));
        var end = parseInt($('#end').val().replace(":",""));
        
        if(start>end)
        {
            alert("start time can not be greater than end time!");
            return;
        }
        $.ajax({
            type:'GET',
            url:'includes/search.php',
            dataType: "json",
            data:'start='+start+'&end='+end,
            success:function(response){
                    var len = response.length;
                    var i;
                    var j;
                    // alert(JSON.stringify(response));
                    for(i=1;i<=6;i++)
                    {
                        
                     for(j=0;j<len;j++)
                       { 
                            if(i==response[j].park_id)
                            {  
                                var total=$('#'+i).data('available')
                                var aval= response[j].count;
                                $('#'+response[j].park_id).text(total-aval);
                                break;
                            }
                            var total=$('#'+i).data('available')
                            $('#'+i).text(total);
                            
                       }
                    } 
            }
        }); 
    });
    
    myFunction = function(park_id){
        
        var start = $('#start').val();
        var end = $('#end').val();
        var aval=$("#"+park_id).text();
        var total = $("#"+park_id).data("available");
        var price = (((parseInt($('#end').val().replace(":","")))-(parseInt($('#start').val().replace(":",""))))/100)*1.5;
        
        $.ajax({
            type:'GET',
            url:"../gopark/booking.php",
            dataType: "json",
            data:'park_id='+park_id,
            success:function(response){
                var name = response[0].park_name;
                
                window.location="../gopark/book.php?name="+name+"&total="+total+"&aval="+aval+"&start="+start+"&end="+end+"&price="+price+"&id="+park_id;
            },
            error: function (ajaxContext) {
                alert(ajaxContext.responseText)
            }
        });
        
        
    }
});
var myFunction ;
