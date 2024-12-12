let currentPlayer = 'X';
        let gameBoard = [
            ['', '', ''],
            ['', '', ''],
            ['', '', '']
        ];

        function makeMove(row, col) {
            if (gameBoard[row][col] === '' && !isGameOver()) {
                gameBoard[row][col] = currentPlayer;
                updateCell(row, col);

                if (isWinner()) {
                    document.getElementById('status').textContent = `Jogador ${currentPlayer} venceu!`;
                    document.getElementById('status').classList.add('winner');
                } else if (isDraw()) {
                    document.getElementById('status').textContent = 'Empate!';
                    document.getElementById('status').classList.add('draw');
                } else {
                    currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
                    document.getElementById('status').textContent = `É a vez do jogador ${currentPlayer}.`;

                    if (currentPlayer === 'O') {
                        setTimeout(makeComputerMove, 500);
                    }
                }
            }
        }

        function updateCell(row, col) {
            const cell = document.querySelector(`#board > div:nth-child(${row * 3 + col + 1})`);
            cell.textContent = gameBoard[row][col];
        }

        function isWinner() {
            for (let i = 0; i < 3; i++) {
                if (gameBoard[i][0] === currentPlayer && gameBoard[i][1] === currentPlayer && gameBoard[i][2] === currentPlayer) {
                    return true;
                }
                if (gameBoard[0][i] === currentPlayer && gameBoard[1][i] === currentPlayer && gameBoard[2][i] === currentPlayer) {
                    return true;
                }
            }
            if (gameBoard[0][0] === currentPlayer && gameBoard[1][1] === currentPlayer && gameBoard[2][2] === currentPlayer) {
                return true;
            }
            if (gameBoard[0][2] === currentPlayer && gameBoard[1][1] === currentPlayer && gameBoard[2][0] === currentPlayer) {
                return true;
            }
            return false;
        }

        function isDraw() {
            return !gameBoard.flat().includes('');
        }

        function isGameOver() {
            return isWinner() || isDraw();
        }

        function makeComputerMove() {
            if (!isGameOver()) {
                const bestMove = getBestMove(gameBoard, 'O', -Infinity, Infinity, true, 0);
                makeMove(bestMove.row, bestMove.col);
            }
        }

        function getBestMove(board, player, alpha, beta, isMaximizing, depth) {
            const scores = {
                X: -1,
                O: 1,
                tie: 0
            };

            if (isGameOver() || depth >= 4) {
                const result = isWinner() ? scores[currentPlayer] : scores.tie;
                return { score: result };
            }

            const availableMoves = getAvailableMoves(board);
            let bestMove;
            
            if (isMaximizing) {
                let maxScore = -Infinity;

                for (const move of availableMoves) {
                    board[move.row][move.col] = player;
                    const score = getBestMove(board, player, alpha, beta, false, depth + 1).score;
                    board[move.row][move.col] = '';

                    if (score > maxScore) {
                        maxScore = score;
                        bestMove = move;
                    }

                    alpha = Math.max(alpha, maxScore);
                    if (beta <= alpha) {
                        break;
                    }
                }

                return { score: maxScore, row: bestMove.row, col: bestMove.col };
            } else {
                let minScore = Infinity;

                for (const move of availableMoves) {
                    board[move.row][move.col] = player;
                    const score = getBestMove(board, player, alpha, beta, true, depth + 1).score;
                    board[move.row][move.col] = '';

                    if (score < minScore) {
                        minScore = score;
                        bestMove = move;
                    }

                    beta = Math.min(beta, minScore);
                    if (beta <= alpha) {
                        break;
                    }
                }

                return { score: minScore, row: bestMove.row, col: bestMove.col };
            }
        }

        function getAvailableMoves(board) {
            const moves = [];
            for (let i = 0; i < 3; i++) {
                for (let j = 0; j < 3; j++) {
                    if (board[i][j] === '') {
                        moves.push({ row: i, col: j });
                    }
                }
            }
            return moves;
        }