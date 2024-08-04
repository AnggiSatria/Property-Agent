$(document).ready(function () {
  $("#send-btn").on("click", function () {
    sendMessage();
  });

  $("#user-input").on("keypress", function (e) {
    if (e.which == 13) {
      sendMessage();
    }
  });

  function sendMessage() {
    var userInput = $("#user-input").val();
    if (userInput.trim() === "") return;

    $("#chat-box").append("<div><strong>You:</strong> " + userInput + "</div>");
    $("#user-input").val("");

    $.post("botman.php", { message: userInput }, function (response) {
      $("#chat-box").append(
        "<div><strong>Bot:</strong> " + response + "</div>"
      );
      $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
    });
  }
});
