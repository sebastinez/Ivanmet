class Cotizador {
  constructor() {}

  static checkCurrencies() {
    let primaryCurrency = document.getElementById("selectPrimary");
    primaryCurrency.monto = document.getElementById("inputPrimary").value;
    primaryCurrency.text = UI.getSelectedOptionsText(primaryCurrency);
    let secondaryCurrency = document.getElementById("selectSecondary");
    secondaryCurrency.monto = document.getElementById("inputSecondary").value;
    secondaryCurrency.text = UI.getSelectedOptionsText(secondaryCurrency);

    return { primaryCurrency, secondaryCurrency };
  }

  static async fetchExchangeRates(base, secondary) {
    try {
      let res = await fetch(`https://api.exchangeratesapi.io/latest?base=${base}&symbols=${secondary}`, {
        cache: "default"
      });
      let json = await res.json();
      console.log(json);

      window.localStorage.setItem("currency", JSON.stringify(json));
      return json;
    } catch (e) {
      console.error(e);
    }
  }
  static getExchangeRatesFromLocalStorage() {
    return JSON.parse(window.localStorage.getItem("currency"));
  }

  static changeBaseCurrency(e) {
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();
    Cotizador.fetchExchangeRates(e.target.value, secondaryCurrency.value).then(json => {
      UI.setCurrenciesText(primaryCurrency.text, secondaryCurrency.text);
      UI.setCurrenciesInput(primaryCurrency.monto, primaryCurrency.monto * json.rates[secondaryCurrency.value]);
      UI.setCurrenciesTextNumber(1, json.rates[secondaryCurrency.value]);
    });
  }

  static changeSecondaryCurrency(e) {
    let json = JSON.parse(window.localStorage.getItem("currency"));
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();
    UI.setCurrenciesText(primaryCurrency.text, secondaryCurrency.text);
    UI.setCurrenciesInput(primaryCurrency.monto, primaryCurrency.monto * json.rates[secondaryCurrency.value]);
    UI.setCurrenciesTextNumber(1, json.rates[secondaryCurrency.value]);
  }

  static calculateNumber(e) {
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();
    let changeField, inputField, otherField;
    if (e.target.name === "inputPrimary") {
      changeField = "inputSecondary";
      inputField = primaryCurrency;
      otherField = secondaryCurrency;
    } else {
      changeField = "inputPrimary";
      inputField = secondaryCurrency;
      otherField = primaryCurrency;
    }
    Cotizador.fetchExchangeRates(inputField.value, otherField.value).then(json => {
      let changeFieldElement = document.getElementById([changeField]);

      if (e.target.value === "") {
        changeFieldElement.value = "";
      } else {
        changeFieldElement.value = (e.target.value * json.rates[otherField.value]).toFixed(4);
      }
    });
  }
}

class UI {
  constructor() {}

  static getSelectedOptionsText(e) {
    return e.options[e.options.selectedIndex].innerText;
  }
  static getEventSelectedOptionsText(e) {
    return e.target.options[e.target.options.selectedIndex].innerText;
  }
  static setCurrenciesText(primary, secondary) {
    document.getElementById("primaryCurrency").innerText = primary;
    document.getElementById("secondaryCurrency").innerText = secondary;
  }
  static setCurrenciesInput(primary, secondary) {
    document.getElementById("inputPrimary").value = primary;
    document.getElementById("inputSecondary").value = secondary.toFixed(4);
  }
  static setCurrenciesTextNumber(primary, secondary) {
    document.getElementById("primaryValue").innerText = primary;
    document.getElementById("secondaryValue").innerText = secondary.toFixed(4);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();

  Cotizador.fetchExchangeRates(primaryCurrency.value, secondaryCurrency.value);
  let json = Cotizador.getExchangeRatesFromLocalStorage();

  UI.setCurrenciesText(primaryCurrency.text, secondaryCurrency.text);
  UI.setCurrenciesInput("1", json.rates[secondaryCurrency.value]);
  UI.setCurrenciesTextNumber(1, json.rates[secondaryCurrency.value]);

  document.getElementById("selectPrimary").addEventListener("change", Cotizador.changeBaseCurrency);
  document.getElementById("selectSecondary").addEventListener("change", Cotizador.changeSecondaryCurrency);
});

Array.from(document.getElementsByTagName("input")).forEach(el => {
  el.addEventListener("input", Cotizador.calculateNumber);
});
