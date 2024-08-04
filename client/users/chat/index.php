<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Property Agent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-container {
            margin-top: 20px;
            max-width: 800px;
            margin: auto;
        }
        .chat-box {
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background: #f9f9f9;
        }
        .message {
            margin-bottom: 15px;
        }
        .message .sender {
            font-weight: bold;
        }
        .message .text {
            margin-top: 5px;
        }
        .input-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container chat-container">
        <h1 class="text-center mb-4">Chat with Property Agent</h1>
        <div class="chat-box" id="chat-box">
            <!-- Messages will be displayed here -->
        </div>
        <div class="input-group">
            <textarea class="form-control" id="message-input" rows="3" placeholder="Type your message here..."></textarea>
            <button class="btn btn-primary mt-2" id="send-button">Send</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            const chatBox = $('#chat-box');
            const messageInput = $('#message-input');
            const sendButton = $('#send-button');

            sendButton.on('click', function () {
                const messageText = messageInput.val().trim();
                if (messageText) {
                    chatBox.append(`<div class="message"><div class="sender">You:</div><div class="text">${messageText}</div></div>`);
                    messageInput.val('');
                    chatBox.scrollTop(chatBox[0].scrollHeight);

                    $.post('botman.php', { message: messageText }, function (response) {
                        chatBox.append(`<div class="message"><div class="sender">Agent:</div><div class="text">${response}</div></div>`);
                        chatBox.scrollTop(chatBox[0].scrollHeight);
                    });
                }
            });
        });
    </script>
</body>
</html>
