"use strict";

function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }
  return false;
}

window.addEventListener("load", function() {
  document.getElementById("body").classList.remove("hide");
  document.getElementById("loader").classList.add("hide");
});

window.onload = function() {
  $(".autoplay").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    infinite: true,
    prevArrow: "<img src='./src/arrow-left.svg' class='imgPrev'>",
    nextArrow: "<img src='./src/arrow-right.svg' class='imgNext'>",
    autoplay: true,
    autoplaySpeed: 4000
  });

  if (getQueryVariable("s") === "1") mostrarServicios();
  if (getQueryVariable("p") === "1") mostrarProyectos();
  var herramientasMobile = document.getElementById("herramientas_div");
  herramientasMobile.addEventListener("click", showTextOnClick);
};

function showTextOnClick() {
  var text_es =
    "<ul id='herramientas_mobile'><a href='?page=noticia#text'><li class='herrItem'>Noticias</li></a><a href='?page=cotizador#text'><li class='herrItem'>Conversor de monedas</li></a><a href='?page=dimensiones#text'><li class='herrItem'>Conversor de unidades</li></a><a href='?page=horarios#text'><li class='herrItem'>Horarios Mundiales</li></a><a href='/pages/TablaIncoterms.pdf' target='_blank'><li class='herrItem'>INCOTERMS</li></a><a href='/pages/Container.pdf' target='_blank'><li class='herrItem'>Containers Marítimos</li></a></ul>";
  var text_en =
    "<ul id='herramientas_mobile'><a href='?page=noticia#text'><li class='herrItem'>News</li></a><a href='?page=cotizador#text'><li class='herrItem'>Currency Converter</li></a><a href='?page=dimensiones#text'><li class='herrItem'>Unit Converter</li></a><a href='?page=horarios#text'><li class='herrItem'>World Clock</li></a><a href='/pages/TablaIncoterms.pdf' target='_blank'><li class='herrItem'>INCOTERMS</li></a><a href='/pages/Container.pdf' target='_blank'><li class='herrItem'>Shipping Container</li></a></ul>";
  var herramientas = document.getElementById("herramientas_div");
  if (lang === "en") {
    herramientas.innerHTML = text_en;
  } else {
    herramientas.innerHTML = text_es;
  }
  herramientas.removeEventListener("click", showTextOnClick);
}

setTimeout(function() {
  $(".boton").fadeIn(500);
  $("#skip").hide();
}, 6000);

setTimeout(function() {
  $("#skip").fadeIn(500);
}, 2000);

function entrar() {
  $("#landingLogo").fadeOut(500);
  $("#page").fadeIn(1000);
}

function mostrarServicios() {
  $("#menu-Proyectos").remove();
  $("#menu-Servicios").remove();
  var text;

  if (lang === "en") {
    text = [
      "Freight Forwarder",
      "Customs Broker",
      "Project Cargo",
      "External Office of International Purchases",
      "Transportation Insurance"
    ];
  } else {
    text = [
      "Agentes de Carga",
      "Servicios Aduaneros",
      "Carga de Proyecto",
      "Oficina Externa de Compras Internacionales",
      "Seguros de Transporte"
    ];
  }

  $(
    "<div id='menu-Servicios'><div><a class='menu-item-servicios' href='?page=servicios-agente&s=1#text'><span style='color:orange;'>&#8718;</span> "
      .concat(
        text[0],
        "</a></div><div><a class='menu-item-servicios' href='?page=servicios-aduaneros&s=1#text'><span style='color:orange;'>&#8718;</span> "
      )
      .concat(
        text[1],
        "</a></div><div><a class='menu-item-servicios' href='?page=servicios-carga&s=1#text'><span style='color:orange;'>&#8718;</span> "
      )
      .concat(
        text[2],
        "</a></div><div><a class='menu-item-servicios' href='?page=servicios-oficina&s=1#text'><span style='color:orange;'>&#8718;</span> "
      )
      .concat(
        text[3],
        "</a></div><div><a class='menu-item-servicios' href='?page=servicios-seguros&s=1#text'><span style='color:orange;'>&#8718;</span> "
      )
      .concat(text[4], "</a></div></div>")
  )
    .hide()
    .prependTo(".body")
    .show();
}

function mostrarProyectos() {
  var text2;

  if (lang === "en") {
    text2 = ["Background", "Images"];
  } else {
    text2 = ["Background", "Imágenes"];
  }

  $("#menu-Servicios").remove();
  $("#menu-Proyectos").remove();
  $(
    "<div id='menu-Proyectos'><div><a class='menu-item-proyectos' href='?page=expertise&p=1#text'><span style='color:orange;'>&#8718;</span> "
      .concat(
        text2[0],
        "</a></div><div><a class='menu-item-proyectos' href='?page=imagenes&p=1#text'><span style='color:orange;'>&#8718;</span> "
      )
      .concat(text2[1], "</a></div></div>")
  )
    .hide()
    .prependTo(".body")
    .show();
}
