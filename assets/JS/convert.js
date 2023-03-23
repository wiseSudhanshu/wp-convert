const myHeaders = new Headers();
myHeaders.append("apikey", "pkiHASWjtqtQ55WHySjfhpT1ADAW85mc");

const requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};

const currencyEl_one = document.getElementById('currency-one');
const currencyEl_two = document.getElementById('currency-two');
const amountEl_one = document.getElementById('amount-one');
const amountEl_two = document.getElementById('amount-two');
const bankEl = document.getElementById('banks');

const rateEl = document.getElementById('rate');
const swap = document.getElementById('swap');
const finalAmountEl = document.getElementById('final-amount');

// Fetch exchange rates and update the dom
function calculate() {
  const currency_one = currencyEl_one.value;
  const currency_two = currencyEl_two.value;

  if(amountEl_one.value && amountEl_one.value > 0) {
    fetch(`https://api.apilayer.com/exchangerates_data/convert?to=${currency_two}&from=${currency_one}&amount=${amountEl_one.value}`, requestOptions)
    .then((res) => res.json())
    .then((data) => {
        const rate = data.info.rate;
        rateEl.innerText = `1 ${currency_one} = ${rate} ${currency_two}`;

        amountEl_two.value = (amountEl_one.value * rate).toFixed(2);

        const bankVal = bankEl.value;
        for(let bank in bankRates) {
          if(bank === bankVal) {
            let bankRate = bankRates[bank].rate;
            let final = (amountEl_one.value * (rate - ((bankRate / 100) * rate))).toFixed(2);
            finalAmountEl.innerText = `${final} ${currency_two}`
            break;
          }
        }
    });
  } 
  else if(amountEl_two.value && amountEl_two.value > 0) {
    fetch(`https://api.apilayer.com/exchangerates_data/convert?to=${currency_one}&from=${currency_two}&amount=${amountEl_two.value}`, requestOptions)
    .then((res) => res.json())
    .then((data) => {
        const rate = data.info.rate;
        rateEl.innerText = `1 ${currency_two} = ${rate} ${currency_one}`;

        amountEl_one.value = (amountEl_two.value * rate).toFixed(2);

        const bankVal = bankEl.value;
        for(let bank in bankRates) {
          if(bank === bankVal) {
            let bankRate = bankRates[bank].rate;
            let final = (amountEl_two.value * (rate - ((bankRate / 100) * rate))).toFixed(2);
            finalAmountEl.innerText = `${final} ${currency_one}`
            break;
          }
        }
    });
  }
  else {
    rateEl.innerText = `Getting Exchange Rate...`;
  }
}

// Event Listeners
currencyEl_one.addEventListener('change', () => rateEl.innerText = `Getting Exchange Rate...`);
currencyEl_one.addEventListener('change', calculate);
amountEl_one.addEventListener('input', () => amountEl_two.value = "");
amountEl_one.addEventListener('input', calculate);
currencyEl_two.addEventListener('change', () => rateEl.innerText = `Getting Exchange Rate...`);
currencyEl_two.addEventListener('change', calculate);
amountEl_two.addEventListener('input', () => amountEl_one.value = "");
amountEl_two.addEventListener('input', calculate);
swap.addEventListener('click', () => {
  const temp = currencyEl_one.value;
  currencyEl_one.value = currencyEl_two.value;
  currencyEl_two.value = temp;
  calculate();
});
bankEl.addEventListener('change', calculate);

const dropList = document.querySelectorAll("#banks");

for(let i = 0; i < dropList.length; i++) {
  for(let bank in bankRates) {
    let optionTag = `<option value="${bank}">${bank}</option>`;
    dropList[i].insertAdjacentHTML("beforeend", optionTag);
  }
}

calculate();