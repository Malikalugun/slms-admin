$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitIssue").click(function () {
    $("#btnSubmitIssue").html("Sumitting...");
    var cardno = $("#cardno").val();
    var bookid = $("#bookid").val();


    $.ajax({
      type: "post",
      url: "issue-action.php",
      data: {cardno: cardno, bookid: bookid, action: "Issue" },
      success: function (data) {
        var x = data;
        if (x == "Book Issued successfully.") {
          window.location = "./transaction.php";
        } else {
          $("#btnSubmitIssue").html("Issue Book");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(3000);
        }
      },
    });
  });

  //Admin Login End.

  });
