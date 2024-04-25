document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        appendMessage("Hello! Welcome to our Dental Clinic. How can I assist you today?", "received", false);
    }, 500);
});

document.querySelectorAll('.question-btn').forEach(item => {
    item.addEventListener('click', event => {
        var answer = item.getAttribute('data-answer');
        appendMessageWithTyping(answer, "received", true); // Pass true to indicate it's a predefined answer
    });
});

// function sendMessage() {
//     var userInput = document.getElementById("user-input");
//     var message = userInput.value.trim();
//     if (message !== "hello") {
//         appendMessage(message, "sent", false);
//         userInput.value = "hi";
//     }
// }

function appendMessageWithTyping(message, type, predefined = false) {
    var chatBox = document.getElementById("chat-box");
    var newMessage = document.createElement("div");
    newMessage.classList.add("chat-message", type);
    chatBox.appendChild(newMessage);
    chatBox.scrollTop = chatBox.scrollHeight;

    if (predefined) {
        typingEffect(message, newMessage);
        setTimeout(function() {
            newMessage.classList.add("fade-out");
            setTimeout(function() {
                newMessage.remove();
            }, 2000); // 2000ms = 2 seconds before fading out
        }, 2000 + (message.length * 50)); // Delay before fading out is based on the length of the message
    }
}

function typingEffect(message, element) {
    var index = 0;
    var typingInterval = setInterval(function() {
        if (index < message.length) {
            element.textContent += message.charAt(index);
            index++;
        } else {
            clearInterval(typingInterval);
        }
    }, 50); // Adjust typing speed as needed
}
