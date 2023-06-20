export default function currencyMYR(value) {
  return new Intl.NumberFormat('en-MY', {style: 'currency', currency: 'MYR'})
    .format(value);
}
