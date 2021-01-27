console.log('use me!');

// Browse More

const browseButton = document.querySelectorAll('.browse-more');

const loadMoreArticles = (event) => {
  const articles = document.querySelectorAll(
    '.categories__article:nth-child(n+4)'
  );

  const filteredArticles = Array.prototype.slice
    .call(articles)
    .filter(
      (article) =>
        article.getAttribute('data-article') ==
        event.target.getAttribute('data-article')
    );

  filteredArticles.forEach((article) => {
    article.style.display = 'flex';
  });

  browseButton.forEach((button) => {
    if (
      button.getAttribute('data-article') ==
      event.target.getAttribute('data-article')
    ) {
      button.style.display = 'none';
    }
  });

  //   browseButton.forEach((button) => {
  //     if (button.clicked == 'true') {
  //       alert('button pressed');
  //       button.style.display = 'none';
  //     }
  //   });
};

browseButton.forEach((button) => {
  button.addEventListener('click', loadMoreArticles);
});
