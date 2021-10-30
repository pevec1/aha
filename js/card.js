let card; //объект - создаваемая карточка
let text = "";
let imgUrl = ""; //адрес изображения

class Card {
  //конструктор с параметрами, создающий объект карточку (не DOM-объект)

  #id;
  #divColClassName;
  #divClassName;
  #pClassName;
  #text;
  #imageSource;

  constructor(id, divColClassName, divClassName, pClassName, text, imgUrl) {
    this.Id = id;
    this.DivColClassName = divColClassName;
    this.DivClassName = divClassName;
    this.PClassName = pClassName;
    this.Text = text;
    this.ImageSource = imgUrl;
  }

  get Id() {
    return this.#id;
  }

  set Id(value) {
    this.#id = value;
  }

  get DivColClassName() {
    return this.#divColClassName;
  }

  set DivColClassName(value) {
    this.#divColClassName = value;
  }

  get DivClassName() {
    return this.#divClassName;
  }

  set DivClassName(value) {
    this.#divClassName = value;
  }

  get PClassName() {
    return this.#pClassName;
  }

  set PClassName(value) {
    this.#pClassName = value;
  }

  get Text() {
    return this.#text;
  }

  set Text(value) {
    this.#text = value;
  }

  get ImageSource() {
    return this.#imageSource;
  }

  set ImageSource(value) {
    this.#imageSource = value;
  }

  //метод - создание карточки
  createCard() {
    let cardcol; //объект - блок (div)
    let card;
    let p; //объект - абзац (p)
    //let divColClassName;
    //let divClassName;
    //let pClassName;

    cardcol = document.createElement("div");
    //cardcol.divColClassName = this.DivColClassName;
    let arr = [];
    arr = this.DivColClassName.split(" ");
    for (let i = 0; i <= arr.length; i++) {
      cardcol.classList.add(arr[i]);
    }

    card = document.createElement("div");
    card.id = this.Id;
    //card.divClassName = this.DivClassName;
    card.classList.add(this.DivClassName);

    let div = document.querySelector(".cardrow");
    div.insertAdjacentElement("beforeend", cardcol);
    //добавляем карточку после формы
    cardcol.insertAdjacentElement("afterbegin", card);
    //добавляем карточку после формы

    p = document.createElement("p");
   // p.pClassName = "servis";
    p.classList.add(this.PClassName);
    p.textContent = this.Text; //добавляем текст абзацу

    card.insertAdjacentElement("afterend", p); //добавляем абзац в конец карточки

    //если путь к картинке задан, то создаём её
    if (typeof this.ImageSource != "undefined") {
      this.createImage(card);
    }
  }

  //метод - создание изображения в карточке
  createImage(card) {
    let img; //объект - изображение в карточке

    img = document.createElement("div");
    img.divClassName = this.ImageSource;
    //img.alt = "Фото";

    card.prepend(img); //добавляем изображение в начало карточки
  }

  static getSizeCard(id) {
    return [
      document.getElementById(id).offsetWidth,
      document.getElementById(id).offsetHeight,
    ];
  }
}
card = new Card(
  "",
  "card col-12 col-md-6 col-xl-4",
  "web-site",
  "service",
  "Lorem ipsum dolor sit amet consectetur",
  "../img/web-site.svg"
);
card.createCard();
card.createCard();
card.createCard();
