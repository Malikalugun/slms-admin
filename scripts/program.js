$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitAdd").click(function () {
    $("#btnSubmitAdd").html("Sumitting...");
    var name = $("#name").val();
    var department = $("#department").val();
    var incharge = $("#incharge").val();

    $.ajax({
      type: "post",
      url: "program-action.php",
      data: {
        name: name,
        department: department,
        incharge: incharge,
        action: "Add",
      },
      success: function (data) {
        var x = data;
        if (x == "Record added successfully.") {
          window.location = "./programs.php";
        } else {
          $("#btnSubmitAdd").html("Submit");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(300);
        }
      },
    });
  });

  //Admin Login End.

  //Admin Login Start.
  $("#btnSubmitUpdate").click(function () {
    $("#btnSubmitUpdate").html("Sumitting...");
    var id = $("#id").val();
    var name = $("#name").val();
    var department = $("#department").val();
    var incharge = $("#incharge").val();

    $.ajax({
      type: "post",
      url: "program-action.php",
      data: {
        program_id: id,
        name: name,
        department: department,
        incharge: incharge,
        action: "Update",
      },
      success: function (data) {
        var x = data;
        if (x == "Record updated successfully.") {
          window.location = "./programs.php";
        } else {
          $("#btnSubmitUpdate").html("Update");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(3000);
        }
      },
    });
  });
});
