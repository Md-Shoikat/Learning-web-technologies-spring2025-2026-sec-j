let board = document.getElementById("board");
let statusText = document.getElementById("status");
let resetBtn = document.getElementById("reset");

let currentPlayer = "X";
let gameActive = true;
let cells = [];
let boardState = ["", "", "", "", "", "", "", "", ""];

for(let i = 0; i < 9; i++)
{
    let cell = document.createElement("div");
    cell.classList.add("cell");
    cell.setAttribute("data-index", i);
    board.appendChild(cell);
    cells.push(cell);

    cell.onclick = function()
    {
        if(boardState[i] !== "" || gameActive === false)
        {
            return;
        }

        boardState[i] = currentPlayer;
        cell.innerHTML = currentPlayer;

        if(checkWinner())
        {
            statusText.innerHTML = "Winner: " + currentPlayer;
            gameActive = false;
            return;
        }

        if(checkDraw())
        {
            statusText.innerHTML = "It's a draw!";
            gameActive = false;
            return;
        }

        if(currentPlayer === "X")
        {
            currentPlayer = "O";
        }
        else
        {
            currentPlayer = "X";
        }

        statusText.innerHTML = "Current Player: " + currentPlayer;
    };
}
