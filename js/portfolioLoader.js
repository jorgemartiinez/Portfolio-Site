$(document).ready(function () {
  loadPortfolioData();
});

// * LOAD PORTFOLIO DATA
const loadPortfolioData = async () => {
  const container = $('#portfolio-cards');
  const spinner = $('#spinner');

  fetch('./server/data/trabajos.json')
    .then((response) => {
      return response.json();
    })
    .then((jsondata) =>
      jsondata.forEach((item) => {
        const containerItem = $('<article class="portfolio__card">');
        const body = loadBody(container, item);
        containerItem.append(body);

        const links = loadBodyLinks(container, item);
        containerItem.append(links);

        setTimeout(() => {
            spinner.remove();
            container.append(containerItem);
        }, 350);
      })
    )
    .catch((err) => {
      console.error(err);
    })
};

// * LOAD BODY DATA
const loadBody = (container, item) => {
  const body = `
              <img class="portfolio__img lazy" alt="${item['nombre']}> imagen" src="assets/img/portfolio/${item['imagen']}" />
              <div class="portfolio__text">
                <h4 class="heading-quaternary"><${item['nombre']}></h4>
                <p class="paragraph-small">
                  ${item['texto']}
                </p>
              </div>
             `;
  return body;
};

// * LOAD BODY LINKS
const loadBodyLinks = (container, item) => {
  let links = `<div class="portfolio__more">
                <div class="portfolio__links">`;
  const texts = [
    {
      icon: 'assets/img/icons/github-alt.svg',
      title: 'Acceder a GitHub'
    },
    {
      icon: 'assets/img/icons/chrome.svg',
      title: ''
    },
    {
      icon: 'assets/img/icons/yt-alt.svg',
      title: ''
    }
  ];
  item.links.forEach((link, index) =>
    link
      ? (links += `<a target="_blank" rel="noreferrer" href="${link}" class="portfolio__link"><img class="portfolio__link-img lazy" src="${texts[index]['icon']}" title="${texts[index]['title']} ${item['nombre']}" alt="${texts[index]['title']} ${item['nombre']}" /></a>`)
      : ''
  );

  links += ` </div> <p class="portfolio__tags">`;

  item.categorias.forEach((category, index) => (links += category + ' '));

  links += '</p></div></article>';
  return links;
};
