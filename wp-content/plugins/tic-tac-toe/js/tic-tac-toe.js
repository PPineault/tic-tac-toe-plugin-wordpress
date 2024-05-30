window.addEventListener("load", (event) => {
    const PLAYER_X = "x";
    const PLAYER_CIRCLE = "circle";

    const x_mark = document.querySelectorAll("[data-x]");
    const o_mark = document.querySelectorAll("[data-o]");
    const cellElements = document.querySelectorAll("[data-case]");
    const replay = document.getElementById("reset");
    const message = document.getElementById("message");
    const messageWin = document.querySelector("[data-win-message]");
    const playerName = document.getElementsByClassName("player");
    const getTourName = document.querySelector(".top-container h2 span");
    const getScore = document.querySelectorAll(".score span:nth-of-type(4)");
    const inputName = document.querySelector(".pseudo-box input[type='text']");
    const form = document.querySelector(".pseudo-box");

    const WINNING_COMBINATIONS = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6],
    ];

    //incrementation for the X tokens
    let i = 0;
    //incrementation for the O tokens
    let j = 0;
    let score = parseInt(setScore(1));
    let playerTurn;
    let player2Name = "";

    //call startGame() to start game
    startGame();

    //call form to ask for the name of player 2
    formulaire();

    //reset the game when we click on the reset button
    replay.addEventListener("click", reset);

    //set player 2 name
    playerName[1].innerText = player2Name;
    getTourName.innerText = player2Name;

    function startGame() {
        playerTurn = false;
        cellElements.forEach((cell) => {
            cell.classList.remove(PLAYER_X);
            cell.classList.remove(PLAYER_CIRCLE);
            cell.addEventListener("click", handleClick, { once: true });
        });
        message.classList.remove("show");
    }

    function handleClick(e) {
        const cell = e.target;
        const currentPlayer = playerTurn ? PLAYER_X : PLAYER_CIRCLE;
        if (currentPlayer === PLAYER_CIRCLE) {
            changeOpacityO();
        } else if (currentPlayer === PLAYER_X) {
            changeOpacityX();
        }
        //  check if the game is finished, before placing other tokens
        if (checkWin(PLAYER_X) || checkWin(PLAYER_CIRCLE)) {
            return;
        }
        //place the mark
        placeMark(cell, currentPlayer);

        //check for win
        if (checkWin(currentPlayer)) {
            endGame(false);
        } else if (isDraw()) {
            //check for draw
            endGame(true);
        } else {
            //switch turn
            swapTurns();
        }
    }

    //function restart the game
    function reset() {
        cellElements.forEach((cell) => {
            cell.classList.remove(PLAYER_X);
            cell.classList.remove(PLAYER_CIRCLE);
            cell.addEventListener("click", handleClick, { once: true });
        });
        message.classList.remove("show");
        messageWin.innerText = "";
        playerTurn = false;
        //update players turns
        getTourName.innerText = playerTurn
            ? playerName[0].innerText
            : playerName[1].innerText;
        // reset the opacity
        i = 0;
        j = 0;
        x_mark.forEach((mark) => {
            mark.style.opacity = 1;
        });
        o_mark.forEach((mark) => {
            mark.style.opacity = 1;
        });
    }
    //function that allows you to place tokens on cells
    function placeMark(cells, currentPlayer) {
        cells.classList.add(currentPlayer);
    }
    //check for draw
    function isDraw() {
        return [...cellElements].every((cell) => {
            return (
                cell.classList.contains(PLAYER_X) ||
                cell.classList.contains(PLAYER_CIRCLE)
            );
        });
    }
    //switch turn
    function swapTurns() {
        playerTurn = !playerTurn;
        getTourName.innerText = `${
            playerTurn ? playerName[0].innerText : playerName[1].innerText
        }`;
    }
    //check for win
    function checkWin(currentPlayer) {
        return WINNING_COMBINATIONS.some((combination) => {
            return combination.every((index) => {
                return cellElements[index].classList.contains(currentPlayer);
            });
        });
    }
    //end of game
    function endGame(draw) {
        if (draw) {
            messageWin.innerText = "Partie Nulle!";
        } else {
            if (playerTurn) {
                messageWin.innerText = playerName[0].innerText + " a gagné!";
                getScore[0].innerHTML = parseInt(getScore[0].innerHTML) + score;
            } else {
                messageWin.innerText = playerName[1].innerText + " a gagné!";
                getScore[1].innerHTML = parseInt(getScore[1].innerHTML) + score;
            }
        }
        message.classList.add("show");
        //a timer of 2 seconds before starting an other game
        setTimeout(reset, 2000);
    }

    //function changeOpacityX; allow to remove a token under player profil
    function changeOpacityX() {
        if (i < x_mark.length) {
            x_mark[i].style.opacity = 0;
            i++;
        }
    }
    //function changeOpacityO; allows to remove a token under player profil
    function changeOpacityO() {
        if (j < o_mark.length) {
            o_mark[j].style.opacity = 0;
            j++;
        }
    }

    function setScore(score) {
        return score;
    }

    //function formulaire; allows to get input and set it to the game;
    function formulaire() {
        inputName.addEventListener("input", (e) => {
            player2Name = e.target.value;
        });

        form.addEventListener("submit", (e) => {
            //prevent page to reload
            e.preventDefault();
            // get the value from the input field
            let inputValue = inputName.value;
            if (
                inputValue.length > 0 &&
                (inputValue.length < 3 || inputValue.length > 8)
            ) {
                alert("Le pseudo doit faire entre 3 et 8 caractères");
                pseudo = null;
            } else if (!inputValue.match(/^[a-zA-Z0-9_.-]*$/)) {
                alert("Le pseudo ne doit pas contenir de caractères spéciaux");
            } else {
                playerName[1].innerText = player2Name;
                getTourName.innerText = player2Name;
                form.classList.remove("box-show");
            }
        });
    }
});
