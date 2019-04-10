var playerHealth = 100;
var computerHealth = 100;
var matchOn = true;
var winner;

function attack() {
    if (matchOn) {
        // Player attacks
        var playerAttack = Math.floor(Math.random()*11);
        computerHealth -= playerAttack;
        console.log("Player caused " + playerAttack + " points of damage! Computer's health :" + computerHealth);
        
        // Computer attacks
        var computerAttack = Math.floor(Math.random()*11);        
        playerHealth -= computerAttack;
        console.log("Computer caused " + computerAttack + " points of damage! Player's health: " + playerHealth + "\n\n");
        
        // Evaluate if the match keeps going
        if (playerHealth>0 && computerHealth>0) {
            matchOn = true;
        }
        // One of the healths reaches 0, match is over
        else {
            // Evaluate who is the winner and display it
            if (playerHealth>computerHealth) {
                winner="Player";
            }
            else {
                winner="Computer";
            }
            // Match is over, condition is not longer met
            matchOn = false;
            // Display winner
            console.log("End of match, the winner is: " + winner);
        }
    }    
}