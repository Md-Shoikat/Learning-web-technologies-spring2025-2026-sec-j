let names = document.getElementById("names");
let submit = document.getElementById("submit");

submit.onclick = function () 
{
  if (names.value === "") {
    alert("Please enter your name");
    return;
  }
  if 
    (
        (names.value[0] < "A" || names.value[0] > "Z") &&
        (names.value[0] < "a" || names.value[0] > "z")
    ) 
    {
        alert("First character must be a letter");
        return;
    }

  for (let i = 0; i < names.value.length; i++) {
    let char = names.value[i];

    if (
      !(
        (char >= "A" && char <= "Z") ||
        (char >= "a" && char <= "z") ||
        char === "." ||
        char === "-"
      )
    ) {
      alert("Please enter a valid name");
      return;
    }
  }

  alert("Name submitted: " + names.value);
};
