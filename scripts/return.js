$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitReturn").click(function () {
    $("#btnSubmitReturn").html("Sumitting...");
    var cardno = $("#cardno").val();
    var bookid = $("#bookid").val();


    $.ajax({
      type: "post",
      url: "return-action.php",
      data: {cardno: cardno, bookid: bookid, action: "Return" },
      success: function (data) {
        var x = data;
        if (x == "Book Returened successfully.") {
          window.location = "./transaction.php";
        } else {
          $("#btnSubmitReturn").html("Return Book");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(3000);
        }
      },
    });
  });

  //Admin Login End.

  });
