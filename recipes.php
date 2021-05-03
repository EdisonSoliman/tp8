<?

// PHP response code for TP8

$recipes = array();

// Chicken Dip Multidimentional Array
$recipes["ChickenDip"] = array();
$recipes["ChickenDip"]["ingredients"] = array();
$recipes["ChickenDip"]["equipment"] = array();
$recipes["ChickenDip"]["directions"] = array();

$recipes["ChickenDip"]["ingredients"][] = "2 bone-in chicken breast halves";
$recipes["ChickenDip"]["ingredients"][] = "1 teaspoon olive oil";
$recipes["ChickenDip"]["ingredients"][] = "1 stalk celery, finely diced";
$recipes["ChickenDip"]["ingredients"][] = "1 (8 ounce) package reduced-fat cream cheese"; 
$recipes["ChickenDip"]["ingredients"][] = "¾ cup blue cheese dressing";
$recipes["ChickenDip"]["ingredients"][] = "⅓ cup hot pepper sauce (such as Frank's RedHot®)";
$recipes["ChickenDip"]["ingredients"][] = "1 cup shredded Cheddar cheese";
  
$recipes["ChickenDip"]["equipment"][] = "Oven";
$recipes["ChickenDip"]["equipment"][] = "8\" x 8\" baking dish";
$recipes["ChickenDip"]["equipment"][] = "Forks";
  
$recipes["ChickenDip"]["directions"][] = "Place chicken breasts in a large saucepan; cover with water.";
$recipes["ChickenDip"]["directions"][] = "Boil until cooked through, about 20 minutes.";
$recipes["ChickenDip"]["directions"][] = "Remove from water, and cool.";
$recipes["ChickenDip"]["directions"][] = "Pull meat from bones and skin. Shred meat and reserve.";
$recipes["ChickenDip"]["directions"][] = "Preheat oven to 350 degrees F. (175 degrees C)";
$recipes["ChickenDip"]["directions"][] = "Heat olive oil in large skillet. Stir in celery; cook until soft.";
$recipes["ChickenDip"]["directions"][] = "Mix in the cream cheese, blue cheese dressing, and ranch dressing.Cook and stir until smooth and creamy.";
$recipes["ChickenDip"]["directions"][] = "Stir in the shredded chicken and hot sauce.";
$recipes["ChickenDip"]["directions"][] = "Spoon mixture into an 8x8 baking dish.";
$recipes["ChickenDip"]["directions"][] = "Sprinkle with the shredded cheese.";
$recipes["ChickenDip"]["directions"][] = "Bake in preheated oven until golden and bubbly, about 30 minutes.";


// Lemon Bars multidimensional array
$recipes["LemonBars"] = array();
$recipes["LemonBars"]["ingredients"] = array();
$recipes["LemonBars"]["equipment"] = array();
$recipes["LemonBars"]["directions"] = array();

$recipes["LemonBars"]["ingredients"][] = "2 cups flour";
$recipes["LemonBars"]["ingredients"][] = "1 cup butter or margarine";
$recipes["LemonBars"]["ingredients"][] = "1/2 cup of powdered sugar";
$recipes["LemonBars"]["ingredients"][] = "4 eggs";
$recipes["LemonBars"]["ingredients"][] = "5 - 7 tablespoon of lemon juice";
$recipes["LemonBars"]["ingredients"][] = "2 cups sugar";
$recipes["LemonBars"]["ingredients"][] = "4 tablespoons flour";
$recipes["LemonBars"]["ingredients"][] = "1/2 teaspoon salt";


$recipes["LemonBars"]["equipment"][] = "Oven";
$recipes["LemonBars"]["equipment"][] = "9\" x 12\" pan";
$recipes["LemonBars"]["equipment"][] = "Measuring cups";
$recipes["LemonBars"]["equipment"][] = "Measuring spoons";
$recipes["LemonBars"]["equipment"][] = "Hand mixer";

  
$recipes["LemonBars"]["directions"][] = "Preheat oven to 350 degrees F.";
$recipes["LemonBars"]["directions"][] = "Cream and press crust ingredients into ungreased 9\" x 12\" pan.";
$recipes["LemonBars"]["directions"][] = "Place pan into oven and bake for 20 minutes.";
$recipes["LemonBars"]["directions"][] = "Mix lemon filling ingredients together until smooth.";
$recipes["LemonBars"]["directions"][] = "Pour lemon filling ontop of baked crust.";
$recipes["LemonBars"]["directions"][] = "Place pan back into the oven and bake for 25 minutes at 350 degrees F.";
$recipes["LemonBars"]["directions"][] = "Sprinkle powdered sugar on top while still warm.";
$recipes["LemonBars"]["directions"][] = "Let cool before cutting into bars.";

// Spiced Tofu Multidimentional Array
$recipes["Tofu"] = array();
$recipes["Tofu"]["ingredients"] = array();
$recipes["Tofu"]["equipment"] = array();
$recipes["Tofu"]["directions"] = array();

$recipes["Tofu"]["ingredients"][] = "1 (16 ounce) package extra-firm tofu, drained and pressed";
$recipes["Tofu"]["ingredients"][] = "2 cups vegetable broth";
$recipes["Tofu"]["ingredients"][] = "3 tablespoons vegetable oil";
$recipes["Tofu"]["ingredients"][] = "½ cup all-purpose flour";
$recipes["Tofu"]["ingredients"][] = "3 tablespoons nutritional yeast";
$recipes["Tofu"]["ingredients"][] = "1 teaspoon salt";
$recipes["Tofu"]["ingredients"][] = "½ teaspoon freshly ground black pepper";
$recipes["Tofu"]["ingredients"][] = "1 teaspoon sage";
$recipes["Tofu"]["ingredients"][] = "½ teaspoon cayenne pepper";

$recipes["Tofu"]["equipment"][] = "Stove";
$recipes["Tofu"]["equipment"][] = "Large skillet";
$recipes["Tofu"]["equipment"][] = "Bowls";
$recipes["Tofu"]["equipment"][] = "Measuring cups";
$recipes["Tofu"]["equipment"][] = "Knife";

$recipes["Tofu"]["directions"][] = "Cut pressed tofu into 1/2-inch thick slices; then cut again into 1/2-inch wide sticks. Place tofu in a bowl, and pour broth over the top. Set aside to soak.";
$recipes["Tofu"]["directions"][] = "In a separate bowl, stir together flour, yeast, salt, pepper, sage, and cayenne.";
$recipes["Tofu"]["directions"][] = "Warm oil in a large skillet over medium-high heat.";
$recipes["Tofu"]["directions"][] = "Remove tofu sticks from broth, and squeeze most (but not all) of the liquid from them. Roll sticks in breading. (You may have to roll sticks twice to end up with a fairly dry outer layer of breading.)</span> Place tofu in hot
        oil; fry until crisp and browned on all sides. Add more oil if necessary.";
  
// Recieve and Process $_GET data
 
// Get the Requesred ID
$requestedID = $_REQUEST["id"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

// Get the Requested List
$requestedList = $_REQUEST["list"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

// Get the sub-array of that ID and List

$requestedArray = $recipes[$requestedID][$requestedList];

// start converting requestd data in JSON

$requestedJSON = "0"; //default value of zero
if ($requestedArray != null) {
  $requestedJSON = json_encode($requestedArray);
}

//output the JSON
echo $requestedJSON;





