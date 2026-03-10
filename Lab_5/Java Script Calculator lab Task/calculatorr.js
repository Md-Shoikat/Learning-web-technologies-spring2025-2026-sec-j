let calculator = document.getElementById("calculator");
let display = document.getElementById("display");

let buttonsDiv = document.createElement("div");
buttonsDiv.id = "buttons";
calculator.appendChild(buttonsDiv);

let buttons = ["1", "2", "3", "+", "4", "5", "6", "-", "7", "8", "9", "*", "0", "C", "=", "/"];

for(let i = 0; i < buttons.length; i++)
{
    let btn = document.createElement("button");
    btn.innerHTML = buttons[i];

    btn.onclick = function(){
        if(buttons[i] === "C")
        {
            display.value = "";
        }
        else if(buttons[i] === "=")
        {
            display.value = eval(display.value);
        }
        else
        {
            display.value = display.value + buttons[i];
        }
    };

    buttonsDiv.appendChild(btn);
}