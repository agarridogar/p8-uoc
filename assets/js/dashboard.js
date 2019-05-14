function showPopUp(item) {
  document.querySelector(`.modal.${item}`).style.display = "flex";
}

function handleErrors(response) {
  if (!response.ok) {
    throw Error(response.statusText);
  }
  return response;
}

function deleteBoat(id) {
  const formData = new FormData();
  formData.append("id", id);
  fetch("?c=dashboard&a=deleteBoat", {
    method: "POST",
    body: formData
  })
    .then(handleErrors)
    .then(res => {
      window.location.reload();
    })
    .catch(err => {
      alert(err);
    });
}

function deleteCategory(id) {
  const formData = new FormData();
  formData.append("id", id);
  fetch("?c=dashboard&a=deleteCategory", {
    method: "POST",
    body: formData
  })
    .then(handleErrors)
    .then(res => {
      window.location.reload();
    })
    .catch(err => {
      alert(err);
    });
}

function deletePort(id) {
  const formData = new FormData();
  formData.append("id", id);
  fetch("?c=dashboard&a=deletePort", {
    method: "POST",
    body: formData
  })
    .then(handleErrors)
    .then(res => {
      window.location.reload();
    })
    .catch(err => {
      alert(err);
    });
}

window.onload = () => {
  document.querySelector("#add-boat-form").addEventListener("submit", event => {
    event.preventDefault();
    fetch("?c=dashboard&a=createBoat", {
      method: "POST",
      body: new FormData(event.currentTarget)
    })
      .then(handleErrors)
      .then(res => {
        window.location.reload();
      })
      .catch(err => {
        alert(err);
      });
  });

  document.querySelector("#add-port-form").addEventListener("submit", event => {
    event.preventDefault();
    fetch("?c=dashboard&a=createPort", {
      method: "POST",
      body: new FormData(event.currentTarget)
    })
      .then(handleErrors)
      .then(res => {
        window.location.reload();
      })
      .catch(err => {
        alert(err);
      });
  });

  document
    .querySelector("#add-category-form")
    .addEventListener("submit", event => {
      event.preventDefault();
      fetch("?c=dashboard&a=createCategory", {
        method: "POST",
        body: new FormData(event.currentTarget)
      })
        .then(handleErrors)
        .then(res => {
          window.location.reload();
        })
        .catch(err => {
          alert(err);
        });
    });

  document.querySelectorAll(".modal").forEach(tag => {
    tag.addEventListener("click", event => {
      event.currentTarget.style.display = "none";
    });
  });

  document.querySelectorAll(".whitebox").forEach(tag => {
    tag.addEventListener("click", event => {
      event.stopPropagation();
    });
  });
};
