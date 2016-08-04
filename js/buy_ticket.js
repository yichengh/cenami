function GetDateStr(AddDayCount) { 
var dd = new Date(); 
dd.setDate(dd.getDate()+AddDayCount);//获取AddDayCount天后的日期 
var y = dd.getFullYear(); 
var m = dd.getMonth()+1;//获取当前月份的日期 
var d = dd.getDate(); 
return y+"-"+m+"-"+d; 
} 


$(document).ready(function(){
  $("button").click(function(){
    var date1 = GetDateStr(0);
    var date2 = GetDateStr(1);
    var date3 = GetDateStr(2);
    var html = [];
    html.push("<div role='tabpanel'>");
    html.push("<ul class='nav nav-tabs' role='tablist'>\
                    <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>" + date1 + "(Today)</a></li>\
                    <li role='presentation'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>" + date2 + "</a></li>\
                    <li role='presentation'><a href='#messages' aria-controls='messages' role='tab' data-toggle='tab'>" + date3 + "</a></li>\
              </ul>");
    
    var theater_id = $(this).attr("id");
    $.post("get_showing.php", { theater_id: theater_id, date1: date1, date2: date2, date3: date3 },
     	function(data){
      		html.push(data);
      		html.push("</div>");
      		$("#showing").html(html.join(''));
    	});
    window.location.href = "#showing";
  	});
});