function changeCurrency(currency) {
        document.getElementById('currencyDropdown').textContent = currency;
        // You can also update other parts of your page based on the selected currency
    }
             const productPrices = {
         'product-1': {
             'NGN': 12000,
             'USD': 15.60,
             'EUR': 14.21
         },
         'product-2': {
             'NGN': 20000,
             'USD': 19.50,
             'EUR': 17.76
         },
         'product-3': {
             'NGN': 10000,
             'USD': 13,
             'EUR': 11.84
         },
         'product-4': {
             'NGN': 9000,
             'USD': 11.70,
             'EUR': 10.66
         },
         'product-5': {
             'NGN': 8500,
             'USD': 11.05,
             'EUR': 10.06
         },
         'product-6': {
            'NGN': 8500,
            'USD': 11.05,
            'EUR': 10.06
         },
         'product-7': {
            'NGN': 9000,
            'USD': 11.70,
            'EUR': 10.66
         },
         'product-8': {
             'NGN': 7000,
             'USD': 8.29,
             'EUR': 9.10
         },
     };
     
     function updateProductPrices(currency) {
                const products = document.querySelectorAll('.product-item');
    
                products.forEach(product => {
                    const productId = product.getAttribute('data-product-id');
                    const price = productPrices[productId][currency];
    
                    const priceElement = product.querySelector('.price');
                    priceElement.textContent = formatPrice(price, currency);
                });
            }
    
            function formatPrice(price, currency) {
                const formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: currency,
                    minimumFractionDigits: 2,
                });
                return formatter.format(price);
            }
    
            function changeCurrency(currency) {
                document.getElementById('currencyDropdown').textContent = currency;
                updateProductPrices(currency);
            }
     // Initial call to set default currency
     updateProductPrices('NGN');