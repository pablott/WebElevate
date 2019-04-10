var playerHealth = 100;
var computerHealth = 100;
var winner;

function match() {
    while (playerHealth>0 && computerHealth>0) {
        // Player attacks
        var playerAttack = Math.floor(Math.random()*11);
        computerHealth -= playerAttack;
        console.log("Player caused " + playerAttack + " points of damage! Computer's health :" + computerHealth);
        
        // Computer attacks
        var computerAttack = Math.floor(Math.random()*11);        
        playerHealth -= computerAttack;
        console.log("Computer caused " + computerAttack + " points of damage! Player's health: " + playerHealth + "\n\n");
    }
    
    // Evaluate who is the winner
    if (playerHealth>computerHealth) {
        winner="Player";
    }
    else {
        winner="Computer";
    }
    
    // Display winner
    console.log("End of match, the winner is: " + winner);
}