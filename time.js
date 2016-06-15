$(document).ready(function(){
  $("#time").click(function(){
    // alert("ayy");
    $.ajax({
      url: "addTime.php",
      context: document.body
    }).done(function(stamp) {

      $( this ).addClass( "done" );
      $("#timeList").append(
        "<tr><td>"
        + stamp 
        + "</td></tr>");
      console.log("called addTime.php");
      console.log("returned " + stamp);
    });

  });
});
