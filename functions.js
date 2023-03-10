document.getElementById("logBtn").addEventListener("click", logIn);


async function logIn(event) {
    event.preventDefault();

    console.log("hej");

      const username = document.getElementsByName("username")[0].value;
      const password = document.getElementsByName("password")[0].value;

      const body = {
        username: username,
        password: password
      }

      const options = {
        method: "POST",
        body: JSON.stringify(body),
        headers: {
            "Content-Type" : "application/json"
        }
      }

      const response = await fetch("login.php", options);
      console.log(response); 
      if(response.ok) {
         document.querySelector("body").innerHTML = "";
         renderRecipes();

      } else {
        document.getElementById("error").textContent = "Invalid username or password";
          }; 

} 

async function renderRecipes() {
    const response = await fetch("./get.php?recipes")
    const resource = await response.json(); 
    for(let recipe of resource) {
        let div = document.createElement("div");
        let nameDiv = document.createElement("div");
        let cultureDiv = document.createElement("div");
        let timeDiv = document.createElement("div");
        let portionsDiv = document.createElement("div");
        let ingredientsDiv = document.createElement("div");
        let directionsDiv = document.createElement("div");
        let imgDiv = document.createElement("div");

        nameDiv.textContent = recipe.name;
        cultureDiv.textContent = recipe.culture;
        timeDiv.textContent = recipe.time;
        portionsDiv.textContent = recipe.portions;
        ingredientsDiv.textContent = recipe.ingredients;
        directionsDiv.textContent = recipe.direction;
        imgDiv.style.backgroundImage = `url(${recipe.img})`;

        div.append(nameDiv, cultureDiv, timeDiv, portionsDiv, ingredientsDiv, directionsDiv, imgDiv);
    }
}