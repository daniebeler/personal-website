var UserInput = "";
var BotOutputTxt = "";
var BotOutputBtn = "";
var Sender = "BOT";
var Counter = 0;
var input = document.getElementById("input");


//check if "enter" is pressed
input.addEventListener("keyup", function (event) {
    if (event.keyCode == 13) {
        EnteredText();
    }
});

//String matching
function bot() {
    UserInput = UserInput.toUpperCase();
    switch (true) {
        //questions for information
        case UserInput.includes("MAIL") || UserInput.includes("NOT THIS ADDRESS"):
            BotOutputTxt = "My E-Mail: hiebeler.daniel@gmail.com";
            showTextAnswer();
            break;
        case UserInput.includes("PHONE") || UserInput.includes("NUMBER"):
            BotOutputTxt = "Phone-Number: +43 67761332011";
            showTextAnswer();
            break;
        case UserInput.includes("LOCATION") || UserInput.includes("MAP") || UserInput.includes("ADDRESS") || UserInput.includes("LOCATED") || UserInput.includes("WHERE"):
            BotOutputTxt = "My Location???";
            showTextAnswer();
            setTimeout(function () {
                BotOutputTxt = "Sonnenstraße 11a";
                showTextAnswer();
            }, 500);
            setTimeout(function () {
                BotOutputBtn = "open GoogleMaps";
                showButtonAnswer("maps");
            }, 1000);
            break;
        //personal questions
        case UserInput.includes("HELLO") || UserInput.includes("HEY") || UserInput.startsWith("HI") || (UserInput.includes("GOOD") && (UserInput.includes("MORNING") || UserInput.includes("EVENING") || UserInput.includes("NIGHT"))):
            switch (getRandomInt(2)) {
                case 0:
                    BotOutputTxt = "Hi!!!";
                    break;
                case 1:
                    BotOutputTxt = "Hello!!!";
                    break;
            }
            showTextAnswer();
            break;
        case UserInput.includes("BYE"):
            BotOutputTxt = "I hope I could help you";
            showTextAnswer();
            break;
        case UserInput.includes("NICE TO MEET YOU"):
            BotOutputTxt = "Nice to meet you too!";
            showTextAnswer();
            break;
        case UserInput.includes("WHAT CAN I DO"):
            BotOutputTxt = "Ask me something, and I will try to answer it";
            showTextAnswer();
            break;
        case UserInput.includes("WHAT CAN YOU DO"):
            BotOutputTxt = "I can answer your questions";
            showTextAnswer();
            break;
        case UserInput.includes("ARE") && UserInput.includes("YOU") && (UserInput.includes("REAL") || UserInput.includes("BOT") || UserInput.includes("HUMAN")):
            BotOutputTxt = "I am a real bot";
            showTextAnswer();
            break;
        case UserInput.includes("HOW OLD ARE YOU") || (UserInput.includes("YOUR") && UserInput.includes("BIRTHDATE")):
            BotOutputTxt = "My developer created me in november 2019";
            showTextAnswer();
            break;
        case UserInput.includes("HOW ARE YOU"):
            BotOutputTxt = "I'm fine, thanks";
            showTextAnswer();
            break;
        case UserInput.includes("WHO ARE YOU"):
            BotOutputTxt = "I'm a chatbot";
            showTextAnswer();
            break;
        case UserInput.includes("THANK YOU") || UserInput.includes("THANKS"):
            BotOutputTxt = "No problem";
            showTextAnswer();
            break;
        case UserInput.includes("HELP"):
            BotOutputTxt = "What should I do?";
            showTextAnswer();
            break;
        case UserInput == ("DROP"):
            BotOutputTxt = "Table!!!";
            showTextAnswer();
            break;
        //answer if nothing else is the correct answer
        default:
            BotOutputTxt = "Sorry, I can't help you with that";
            showTextAnswer();
            break;
    }
}

function EnteredText() {
    UserInput = document.getElementById("input").value;
    if (UserInput != "") {
        var txt = document.createElement("li");
        txt.innerHTML = "&nbsp;&nbsp;" + UserInput + "&nbsp;&nbsp;";
        txt.className = "txtuser";
        document.getElementById("ul").appendChild(txt);
        document.getElementById("input").value = "";
        setTimeout(bot, 500);
    }
}

function showTextAnswer() {
    var txt = document.createElement("li");
    txt.innerHTML = "&nbsp;&nbsp;" + BotOutputTxt + "&nbsp;&nbsp;";
    txt.className = "txtbot";
    document.getElementById("ul").appendChild(txt);
    $('.ulcss').animate({ scrollTop: $('ul.ulcss li:last').offset().top - 30 });

}

function showButtonAnswer(id) {
    var btn = document.createElement("li");
    btn.innerHTML = BotOutputBtn;
    btn.className = "btnbot";
    btn.id = id;
    document.getElementById('ul').appendChild(btn);
}


//random-generator if more answers are possible
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

//open webpage of clicked Button
document.getElementById("ul").addEventListener("click", function (e) {
    switch (e.target.id) {
        case "maps":
            window.open("https://www.google.com/maps/place/Sonnenstraße+11a,+6890+Lustenau")
            break;
    }

});

function toggleDiv() {
    var bot = document.getElementById('div-bot');
    if (bot.style.display == "") {              //opens the chatbot for the first time
        $("#btn-open-bot").fadeOut(500);
        $("#div-bot").fadeIn(500);
        //First messages from the bot
        setTimeout(function () {
            BotOutputTxt = "Hello!";
            showTextAnswer();
        }, 500);
        setTimeout(function () {
            BotOutputTxt = "I am a chatbot";
            showTextAnswer();
        }, 1000);
        setTimeout(function () {
            BotOutputTxt = "How can I help you?";
            showTextAnswer();
        }, 1500);

    } else if (bot.style.display == "none") {    //open bot
        $("#btn-open-bot").fadeOut(500);
        $("#div-bot").fadeIn(500);
    } else {                                    //close bot
        $("#div-bot").fadeOut(500);
        $("#btn-open-bot").fadeIn(500);
    }
}