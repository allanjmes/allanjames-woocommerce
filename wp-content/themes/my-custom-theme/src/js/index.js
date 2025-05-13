import '../css/index.css';
import '../../style.css';

import './page-loader';
import './toggle-theme';
// import './accordion-collapse';

// document.addEventListener('DOMContentLoaded', function () {
    
//     document.querySelectorAll('.qty-plus').forEach(btn => {
//         btn.addEventListener('click', function () {
//             const input = this.previousElementSibling;
//             const max = input.max ? parseFloat(input.max) : Infinity;
//             const step = input.step ? parseFloat(input.step) : 1;
//             let value = parseFloat(input.value);
//             if (value + step <= max) {
//                 input.value = value + step;
//                 input.dispatchEvent(new Event('change'));
//             }

//             updateCartButtonState();
//         });
//     });

//     document.querySelectorAll('.qty-minus').forEach(btn => {
//         btn.addEventListener('click', function () {
//             const input = this.nextElementSibling;
//             const min = 1;
//             const step = input.step ? parseFloat(input.step) : 1;
//             let value = parseFloat(input.value) || 1;
//             if (value - step >= min) {
//                 input.value = value - step;
//                 input.dispatchEvent(new Event('change'));
//                 input.disabled = false;
//             }
//             // Disable minus button if value hits min
//             if (parseFloat(input.value) = min) {
//                 this.disabled = true;
//             } else {
//                 this.disabled = false;
//             }

//             updateCartButtonState();
//         });
//     });

//     function updateCartButtonState() {
//         const updateCartBtn = document.querySelector('.update-cart-btn');
//         updateCartBtn.disabled = false;
//     }
// });

document.addEventListener('DOMContentLoaded', function () {
    // Initialize minus buttons on page load
    document.querySelectorAll('.qty-minus').forEach(minusBtn => {
        const input = minusBtn.nextElementSibling;
        updateMinusButtonState(input);
    });

    // Handle plus button click
    document.addEventListener('click', function (e) {
        if (e.target.matches('.qty-plus')) {
            const input = e.target.previousElementSibling;
            const max = input.max ? parseFloat(input.max) : Infinity;
            const step = input.step ? parseFloat(input.step) : 1;
            let value = parseFloat(input.value) || 0;

            if (value + step <= max) {
                input.value = value + step;
                input.dispatchEvent(new Event('change'));
            }

            updateMinusButtonState(input);
            updateCartButtonState();
        }
    });

    // Handle minus button click
    document.addEventListener('click', function (e) {
        if (e.target.matches('.qty-minus')) {
            const input = e.target.nextElementSibling;
            const min = 1;
            const step = input.step ? parseFloat(input.step) : 1;
            let value = parseFloat(input.value) || 1;

            if (value - step >= min) {
                input.value = value - step;
                input.dispatchEvent(new Event('change'));
            }

            updateMinusButtonState(input);
            updateCartButtonState();
        }
    });

    // Disable or enable the minus button based on input value
    function updateMinusButtonState(input) {
        const minusBtn = input.previousElementSibling;
        const value = parseFloat(input.value) || 1;

        if (minusBtn && minusBtn.classList.contains('qty-minus')) {
            minusBtn.disabled = value <= 1;
        }
    }

    // Enable update-cart button and refresh all minus buttons
    function updateCartButtonState() {
        const updateCartBtn = document.querySelector('.update-cart-btn');
        if (updateCartBtn) {
            updateCartBtn.disabled = false;
        }
    }
});


