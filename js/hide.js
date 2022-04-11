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