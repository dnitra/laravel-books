const latest_books_div = document.querySelector("#latest-books");

const loadData = async () => {
  const response = await fetch(
    "https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php"
  );
  const data = await response.json();

  console.log(data);

  data.forEach(
    (el) =>
      (latest_books_div.innerHTML += `
      <div class = book>
      <h2>${el.title}</h2>
      <img src="${el.image}" alt="${el.title}" />
      ${el.description}
      </div>`)
  );
};

loadData();
