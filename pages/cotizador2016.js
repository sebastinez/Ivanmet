class Cotizador {
  constructor() {}

  static checkCurrencies() {
    let primaryCurrency = {};
    primaryCurrency.monto = document.getElementById('inputPrimary').value;
    let secondaryCurrency = document.getElementById('selectSecondary');
    secondaryCurrency.monto = document.getElementById('inputSecondary').value;
    secondaryCurrency.text = UI.getSelectedOptionsText(secondaryCurrency);

    return { primaryCurrency, secondaryCurrency };
  }

  static async fetchExchangeRates() {
    try {
      var requestOptions = { method: 'GET',
               mode: 'no-cors',
               cache: 'default' };
      let res = await fetch(`${window.location.origin}/monedas.php`,requestOptions);
      let json = await res.json();
      window.localStorage.setItem('currency', JSON.stringify(json));
      return json;
    } catch (e) {
      console.error(e);
    }
  }
  static getExchangeRatesFromLocalStorage() {
    let json = JSON.parse(window.localStorage.getItem('currency'));
    return json;
  }

  static changeSecondaryCurrency(e) {
    let json = Cotizador.getExchangeRatesFromLocalStorage();
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();
    let i = Number(secondaryCurrency.value);

    UI.setCurrenciesText(secondaryCurrency.text, 'peso argentino');
    UI.setCurrenciesInput(
      primaryCurrency.monto,
      primaryCurrency.monto / Number(json[i][2])
    );
    UI.setCurrenciesTextNumber(1, Number(json[i][2]));
  }

  static calculateNumber(e) {
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();
    let i = Number(secondaryCurrency.value);

    let json = Cotizador.getExchangeRatesFromLocalStorage();

    if (e.target.value === '') {
      let elements = document.getElementsByTagName('input');
      for (let i = 0; i < elements.length; i++) {
        elements[i].value = '';
      }
    }
    if (e.target.name === 'inputPrimary') {
      document.getElementById('inputSecondary').value =
        e.target.value / Number(json[i][2]);
    } else {
      document.getElementById('inputPrimary').value =
        e.target.value * Number(json[i][2]);
    }
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
    document.getElementById('primaryCurrency').innerText = primary;
    document.getElementById('secondaryCurrency').innerText = secondary;
  }
  static setCurrenciesInput(primary, secondary) {
    document.getElementById('inputPrimary').value = primary;
    document.getElementById('inputSecondary').value = secondary;
  }
  static setCurrenciesTextNumber(primary, secondary) {
    document.getElementById('primaryValue').innerText = primary;
    document.getElementById('secondaryValue').innerText = secondary;
  }
  static fillOutCurrencies(json) {
    let secondarySelect = document.getElementById('selectSecondary');
    for (let i = 0; i < json.length; i++) {
      let option = document.createElement('option');
      option.text = json[i][1].toLowerCase();
      option.value = i;
      secondarySelect.add(option);
    }
  }
}

window.addEventListener('load', () => {
  Cotizador.fetchExchangeRates().then(json => {
    UI.fillOutCurrencies(json);
    let { primaryCurrency, secondaryCurrency } = Cotizador.checkCurrencies();

    UI.setCurrenciesText(secondaryCurrency.text, 'peso argentino');
    UI.setCurrenciesInput(json[0][2], '1');
    UI.setCurrenciesTextNumber(1, Number(json[0][2]));

    document
      .getElementById('selectSecondary')
      .addEventListener('change', Cotizador.changeSecondaryCurrency);

    Array.from(document.getElementsByTagName('input')).forEach(el => {
      el.addEventListener('input', Cotizador.calculateNumber);
    });
  });
});
