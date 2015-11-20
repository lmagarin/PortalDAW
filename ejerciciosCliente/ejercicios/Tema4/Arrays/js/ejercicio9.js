function inicio(){
    var john = { name: "John Smith", age: 23 };
    var mary = { name: "Mary Key", age: 18 };
    var bob = { name: "Bob-small", age: 6 };
    var people = [john.age, mary.age, bob.age];
    console.log(ageSort(people));
}

function ageSort(array){
    var ageJohn = array[0];
    var ageMary = array[1];
    var ageBob = array[2];
    var ages = [ageJohn, ageMary, ageBob];
    return ages.sort(compare);
}

function compare(a, b) {
    if (a > b){
        return 1;
    }
    else if (a < b){
        return -1;
    }
    else{
        return 0;
    }
}

window.addEventListener("load", inicio);