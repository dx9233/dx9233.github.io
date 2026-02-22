
  const switcher = document.getElementById("language-switcher");

  // Определяем текущий язык из URL
  const pathParts = window.location.pathname.split("/");
  const currentLang = pathParts[1];

  if (currentLang) {
    switcher.value = currentLang;
  }

  switcher.addEventListener("change", function () {
    const newLang = this.value;

    // Получаем текущую страницу без языка
    const page = pathParts.slice(2).join("/") || "index.html";

    window.location.href = `/${newLang}/${page}`;
  });
