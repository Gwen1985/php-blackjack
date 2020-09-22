# php-blackjack

## Instructions

#### 1: Create a new file named Player.php and create a class called Player.

##### 2: Add 2 private properties:
###### 2.1: cards (array)
###### 2.2: lost (bool, default = false)

##### 3: Add 4 empty public methods to this class:
###### 3.1: Hit
###### 3.2: Surrender
###### 3.3: getScore
###### 3.4: hasLost

##### 4: Create a new file named Blackjack.php and create a class called blackjack.

##### 5: Add 3 private properties
###### 5.1: player
###### 5.2: dealer
###### 5.3: deck

##### 6: Add 2 public methods:
###### 6.1: getPlayer
###### 6.2: getDealer

##### 7: Create a constructor in the Blackjack class

##### 8: In the constructor:
###### 8.1: Instantiate the Player class twice and insert it into the player variable and a dealer property.

##### 9: Create a new deck object

##### 10: Shuffle the cards with shuffle method on deck and save this instance in the session.

##### 11: Use forms to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)

##### 12: Use the class' methods to react to these actions.

##### 13: Hit should add a card to the player. If this brings the score above 21, set lost property to true.

##### 14: Surrender should make you surrender the game. This sets the property lost in the player instance to true. (CPU wins)

##### 15: getScore() loops over all the cards and return the total value of that player cards.

##### 16: Stand does not have a method in the player class but will instead call hit on the dealer instance.

##### 17: hasLost() will return the bool of the lost property.
