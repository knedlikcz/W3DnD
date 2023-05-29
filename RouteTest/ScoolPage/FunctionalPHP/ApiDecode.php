<?php
//a json string will come from https://www.dnd5eapi.co/ and will be decoded into an array, it can have any number of entries and variable values, names, etc. 
//one of the examples of a response is "{"index":"acid-arrow","name":"Acid Arrow","desc":["A shimmering green arrow streaks toward a target within range and bursts in a spray of acid. Make a ranged spell attack against the target. On a hit, the target takes 4d4 acid damage immediately and 2d4 acid damage at the end of its next turn. On a miss, the arrow splashes the target with acid for half as much of the initial damage and no damage at the end of its next turn."],"higher_level":["When you cast this spell using a spell slot of 3rd level or higher, the damage (both initial and later) increases by 1d4 for each slot level above 2nd."],"range":"90 feet","components":["V","S","M"],"material":"Powdered rhubarb leaf and an adder's stomach.","ritual":false,"duration":"Instantaneous","concentration":false,"casting_time":"1 action","level":2,"attack_type":"ranged","damage":{"damage_type":{"index":"acid","name":"Acid","url":"/api/damage-types/acid"},"damage_at_slot_level":{"2":"4d4","3":"5d4","4":"6d4","5":"7d4","6":"8d4","7":"9d4","8":"10d4","9":"11d4"}},"school":{"index":"evocation","name":"Evocation","url":"/api/magic-schools/evocation"},"classes":[{"index":"wizard","name":"Wizard","url":"/api/classes/wizard"}],"subclasses":[{"index":"lore","name":"Lore","url":"/api/subclasses/lore"},{"index":"land","name":"Land","url":"/api/subclasses/land"}],"url":"/api/spells/acid-arrow"}"
//this is one of many responses that can be received from the api
//the array will be used to display the data on the page

//the json string will be decoded into an array
function decode($response){
    $decoded = json_decode($response, true);
    return $decoded;
}

function sanitize($decoded){
    foreach($decoded as $key => $value){
        if($key == "url"){

        }elseif(is_array($value)){
            Sanitize($value);
        }elseif(is_bool($value)){
            if($value == true){
                $decoded[$key] = "true";
            } else {
                $decoded[$key] = "false";
            }
        } elseif(is_null($value)){
            $decoded[$key] = $value;
        }
        elseif($value == "/api/" . $key){
            $decoded[$key] = $value;
        }
        else {
            $decoded[$key] = htmlspecialchars($value);
        }
    }
    return $decoded;
}

function ClearUpArray($decoded){
    if(isset($decoded["index"])){
        unset($decoded["index"]);
    }
    if(isset($decoded["url"])){
        unset($decoded["url"]);
    }
    return $decoded;
}

function display($decoded){
    foreach($decoded as $key => $value){
        if(is_array($value) &&  $key != "url" && $value!= "/api/" . $key){
            echo "<div class='array " . $key . "'>";
            $key = str_replace("_", " ", $key);
            $key = ucfirst($key);
            if($key == ""){
                continue;
            } else {
                echo "<h2>" . $key . "</h2>";
            }
            if(isset($value["name"])){
                unset($value["name"]);
            }
            if(is_array($value)){
                if(isset($value["index"])){
                    unset($value["index"]);
                    display($value);
                }
                else{
                    display($value);
                }
            } else {
                echo "<p>" . $value . "</p>";
            }
            echo "</div>";
        } else {
            if($key == "url"){
                $value = substr($value, 4);
                $ActualUrl = $value;
                $value = substr($value, strrpos($value, "/") + 1);
                $value = ucfirst($value);
                echo "<div class='url " . $key . "'>";
                echo "<a href='" . $ActualUrl . "'>" . $value . "</a>";
                echo "</div>";
            } elseif($value == "/api/" . $key){
                $value = substr($value, 4);
                $ActualUrl = $value;
                $value = substr($value, strrpos($value, "/") + 1);
                $value = ucfirst($value);
                echo "<div class='url " . $key . "'>";
                echo "<a href='" . $ActualUrl . "'>" . $value . "</a>";
                echo "</div>";
            }
            else {
                echo "<div class='entry " . $key . "'>";
                echo "<h2>" . $key . "</h2>";
                echo "<p>" . $value . "</p>";
                echo "</div>";
            }
        }
    }
}

?>