function showPopUp(item) {
  document.querySelector(`.modal.${item}`).style.display = "flex";
}

window.onload = () => {
  document.querySelector("#add-boat-form").addEventListener("submit", event => {
    event.preventDefault();
    fetch("?c=dashboard&a=createBoat", {
      method: "POST",
      body: new FormData(event.currentTarget)
    });
    window.location.reload();
  });

  document.querySelector("#add-port-form").addEventListener("submit", event => {
    event.preventDefault();
    fetch("?c=dashboard&a=createPort", {
      method: "POST",
      body: new FormData(event.currentTarget)
    });
    window.location.reload();
  });

  document
    .querySelector("#add-category-form")
    .addEventListener("submit", event => {
      event.preventDefault();
      fetch("?c=dashboard&a=createCategory", {
        method: "POST",
        body: new FormData(event.currentTarget)
      });
      window.location.reload();
    });
};
