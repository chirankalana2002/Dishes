// Select the form
const form = document.querySelector("form");

// Add submit event
form.addEventListener("submit", function(e) {
    e.preventDefault(); // stop page reload

    // Get form values
    const recipeName = form.querySelector('input[type="text"][required]').value;
    const category = form.querySelector("select").value;
    const ingredients = form.querySelectorAll("textarea")[0].value;
    const instructions = form.querySelectorAll("textarea")[1].value;
    const cookingTime = form.querySelectorAll('input[type="text"]')[1].value;
    const image = form.querySelector('input[type="file"]').files[0];

    // Create recipe object
    const recipe = {
        name: recipeName,
        category: category,
        ingredients: ingredients,
        instructions: instructions,
        cookingTime: cookingTime,
        imageName: image ? image.name : "No Image"
    };

    // Save to Local Storage
    let recipes = JSON.parse(localStorage.getItem("recipes")) || [];
    recipes.push(recipe);
    localStorage.setItem("recipes", JSON.stringify(recipes));

    // Success message
    alert("Recipe submitted successfully!");

    // Reset form
    form.reset();
});