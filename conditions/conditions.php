<?php

// $current_condition = ""; // This would typically come from a weather API or user input 
// $weather_conditions = ["rain", "snow", "sunny", "cloudy", "windy", "foggy", "stormy", "humid", "dry", "hot", "cold"];
// if (in_array($current_condition, $weather_conditions)) {
//     echo "The current weather condition is: " . $current_condition;
// } else {
//     echo "Unknown weather condition.";
// }

$weather = "dry";
switch ($weather) {
    case "rain":
        echo "It's raining outside. Don't forget your umbrella!";
        break;
    case "snow":
        echo "Snow is falling! Time for some hot chocolate.";
        break;
    case "sunny":
        echo "It's a bright and sunny day! Enjoy the sunshine.";
        break;
    case "cloudy":
        echo "The sky is overcast with clouds.";
        break;
    case "windy":
        echo "It's quite windy today. Hold onto your hat!";
        break;
    case "foggy":
        echo "Visibility is low due to fog. Drive safely.";
        break;
    case "stormy":
        echo "A storm is approaching. Stay indoors if possible.";
        break;
    case "humid":
        echo "It's very humid today. Stay hydrated!";
        break;
    case "dry":
        echo "The air is dry. Consider using a moisturizer.";
        break;
    case "hot":
        echo "It's hot outside. Wear light clothing.";
        break;
    case "cold":
        echo "It's cold today. Bundle up!";
        break;
    default:
        echo "Unknown weather condition.";
        break;
}

?>
