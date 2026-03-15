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

function checkWinner()
{
    let winPatterns = [
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]
    ];

    for(let i = 0; i < winPatterns.length; i++)
    {
        let a = winPatterns[i][0];
        let b = winPatterns[i][1];
        let c = winPatterns[i][2];

        if(
            boardState[a] !== "" &&
            boardState[a] === boardState[b] &&
            boardState[b] === boardState[c]
        )
        {
            cells[a].classList.add("winner");
            cells[b].classList.add("winner");
            cells[c].classList.add("winner");
            return true;
        }
    }

    return false;
}

function checkDraw()
{
    for(let i = 0; i < boardState.length; i++)
    {
        if(boardState[i] === "")
        {
            return false;
        }
    }
    return true;
}

resetBtn.onclick = function()
{
    currentPlayer = "X";
    gameActive = true;
    boardState = ["", "", "", "", "", "", "", "", ""];
    statusText.innerHTML = "Current Player: X";

    for(let i = 0; i < cells.length; i++)
    {
        cells[i].innerHTML = "";
        cells[i].classList.remove("winner");
    }
};