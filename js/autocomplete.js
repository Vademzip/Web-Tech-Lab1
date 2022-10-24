let cities = [
    "Москва",
    "Санкт-Петербург",
    "Екатеринбург",
    "Уфа",
    "Омск",
    "Томск",
    "Краснодар",
    "Новосибирск",
    "Тула",
    "Калуга",
    "Ростов-На-Дону",
    "Архангельск",
    "Астрахань",
    "Хабаровск",
    "Владивосток",
    "Тюмень",
    "Сургут",
    "Сочи",
    "Элиста",
    "Махачкала",
    "Грозный",
    "Дербент",
    "Дубна",
    "Подольск",
    "Ижевск",
    "Ульяновск",
    "Самара",
    "Рязань",
    "Камчатка",
]

let sortedNames = cities.sort();

let citiesInput = document.getElementById("cities")
if (citiesInput){
citiesInput.addEventListener("keyup", (e) =>{
    debugger;
    for (let i of sortedNames){
        if (i.toLowerCase.startsWith(citiesInput.value.toLowerCase()) && citiesInput.value != ""){
            let listItem = document.createElement("li")
            listItem.classList.add("list-items");
            listItem.style.cursor = "pointer";
            listItem.setAttribute("onclick", "displayNames('"+ i + "')");
            let word = "<b>" + i.substring(0,citiesInput.value.length)+"</b>";
            word += i.substring(citiesInput.value.length);
            console.log(word);
        }

    }
})
}