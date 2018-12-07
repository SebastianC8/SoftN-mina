function number_format(amount, decimals) {
    amount += "";
    amount = parseFloat(amount.replace(/[^0-9\.]/g, ""));
    if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);
    amount = "" + amount.toFixed(decimals);
    var amount_parts = amount.split("."),
      regexp = /(\d+)(\d{3})/;
    while (regexp.test(amount_parts[0]))
      amount_parts[0] = amount_parts[0].replace(regexp, "$1" + "," + "$2");
    return amount_parts.join(".");
  }
