/**
 * Finds all pairs that sum to the target value. Runtime: O(n^2)
 * @param numArray - Array of numbers
 * @param n - size of the array of numbers
 * @param target - target value pairs sum up to
 * @returns - array of valid pairs
 */
 function findAllPairs(numArray, n, target) {
    // create empty "map" for valid pairs
    var pairArray = [];
    // loop through array twice to find pairs that sum to target
    for (var i = 0; i < n; i++) {
        for (var j = 0; j < n; j++) {
            // if pair sums to target, push to map of pairs
            // i != j so that you dont get the pairs of the same index
            if (numArray[i] + numArray[j] === target && i != j) {
                pairArray.push([numArray[i], numArray[j]]);
            }
        }
    }
    return pairArray;
}
/**
 * Finds all unique pairs and reversed pairs that sum to the target value. Runtime: O(n^2)
 */
function findUniqueAndReversedPairs(numArray, n, target) {
    // create empty "map" for valid pairs
    var pairArray = {};
    // loop through array twice to find pairs that sum to target
    for (var i = 0; i < n; i++) {
        for (var j = 0; j < n; j++) {
            // if pair sums to target, push to map of pairs
            if (numArray[i] + numArray[j] === target && i != j) {
                pairArray[numArray[i]] = numArray[j];
            }
        }
    }
    return pairArray;
}
/**
 * Finds all unique pairs using two pointers. One pointer starts at the beginning of the list, the other at the end.
 * Run until pointers intersect and have covered all unique pairings. Runtime: O(n log n)
 */
function findUniquePairs(numArray, n, target) {
    // sort the array in ascending order
    numArray.sort();
    
    // create two "pointers" for the beginning and end of the array
    let low = 0;
    let high = n - 1;
    let pairArray = {};

    // while the pointers do not intersect
    while (low < high) {
        // if the pointers sum to the target push it to result list
        if (numArray[low] + numArray[high] === target) {
            pairArray[numArray[low]] = numArray[high];
        }
        // if the sum of the pairs is LESS than target increase the lower boundary; decrease the higher boundary otherwise
        if (numArray[low] + numArray[high] < target) {
            low++;
        }
        else {
            high--;
        }
    }
    
    // return results
    return pairArray;
}

function parseListResults(numArray) {
    let result = ""
    for (let pair of numArray) {
        result += `[${pair.toString()}], `
    }
    // remove the unnecessary comma at the end with slice
    return result.slice(0, -2);
}

function parseMapResults(numArray) {
    let result = ""
    for (let k in numArray) {
        result += `[${k}, ${numArray[k]}], `
    }
    // remove the unnecessary comma at the end with slice
    return result.slice(0, -2);
}

function updateResults() {
    // get array from html
    let arrayInput = document.getElementById("listInput").value;
    
    // get sum value from html
    let sumValue = Number(document.getElementById("sumValue").value);

 
    // parse input string into array (map is used here to transform each element into an integer)
    let parsedArray = arrayInput.split(",").map(Number)

    // get html tags to update
    let list = document.getElementById("list");
    let allPairs = document.getElementById("allPairs");
    let uniqueAndReversedPairs = document.getElementById("uniqueAndReversedPairs");
    let uniquePairs = document.getElementById("uniquePairs");

    // update html tags with results
    list.textContent = `[${arrayInput}]`;
    allPairs.textContent = parseListResults(findAllPairs(parsedArray, parsedArray.length, sumValue));
    uniqueAndReversedPairs.textContent = parseMapResults(findUniqueAndReversedPairs(parsedArray, parsedArray.length, sumValue));
    uniquePairs.textContent = parseMapResults(findUniquePairs(parsedArray, parsedArray.length, sumValue));
}
