function GetSelectedTextValue(leaveType){
    
if(leaveType.value == "Half Day"){
    document.getElementById("endDate").style.display = 'none';
    document.getElementById("startDateLabel").innerHTML = 'Date';
    document.getElementById("endDateLabel").style.display = 'none';

}
if(leaveType.value == "Full Day"){
    document.getElementById("startDate").style.display = '';
    document.getElementById("endDate").style.display = '';
    document.getElementById("startDateLabel").innerHTML = 'Start Date';
    document.getElementById("endDateLabel").style.display = '';


}
}
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#attendancedate').attr('max', maxDate);
});



const updateStatus= function(id,status){
    $.ajax({    
        type: "POST",
        url: "approveleave.php", 
        data:{updateId:id,status:status},            
        dataType: "html",                  
        success: function(data){  
            location.reload(true)
        }
    });
}

const attendanceLeaveDetails= function(type,employeename,month,year,userId){

    $.ajax({    
        type: "POST",
        url: "viewsortall.php", 
        data:{type:type,employeename:employeename,month:month,year:year}, 
        dataType: "html",             
        success: function(data){  
            //var contents = document.getElementById("data.yourDiv").innerHTML;
            alert(data);
            $( ".replace_tab" ).replaceWith(data.replace_tab);
        }
    });
}