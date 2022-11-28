// JavaScript Document
function getBotResponse(input) {
    //rock paper scissors
    if (input == "I'm looking plumber") {
        return "Sure,You can find from our site or call us for more information 037 2252101.";
    } else if (input == "I want some equipment") {
        return "Sure,You can find from our site or call us for more information 037 2252101.";
    } else if (input == "Price plz") {
        return "You can find from our site or call us for more information 037 2252101.";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Thank You!";
    } else {
        return "Try asking something else!";
    }
}