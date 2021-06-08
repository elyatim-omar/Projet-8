$(document).ready(function() {
   var studentsList ;
    function getAll() {
        $.ajax({
            url:"getStudents.php",
        method:"GET",
        success:function(data) {
            studentsList = JSON.parse(data);
            console.log(studentsList);
            for (var i = 0; i < studentsList.length; i++) {
              $(".studentsList").append('<li><h3>'+"Last Name: "+studentsList[i]["name"]+'</h3>');
            }
          }
        })
      }
      getAll();
      });