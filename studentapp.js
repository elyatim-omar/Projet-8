$(document).ready(function(){
var studentsList;
function getall() {
  $(".studentsList").html(" ");
  $.ajax({
    url:"/api/getStudents.php",
    method:"GET",
    success:function(data) {
      studentsList = JSON.parse(data);
      console.log(studentsList);
      for (var i = 0; i < studentsList.length; i++) {
        $(".studentsList").append('<tr><td>'+""+studentsList[i]["name"]+'</td><td>'+""+studentsList[i]["fathername"]+'</td><td>'+""+studentsList[i]["position"]+'</td><td>'+'</tr>');
      }
    }
  })
}
getall();

})
