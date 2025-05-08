let count = 0;
const loadingCountElement = document.getElementById('loading-count');
const loadingContainer = document.getElementById('loading-container');
const mainContent = document.getElementById('main-content');
const loadingIntervalDuration = 5;

const interval = setInterval(() => {
    count++;
    loadingCountElement.textContent = count;
    if (count >= 99) {
        clearInterval(interval);

        // After count finishes, check if page is already loaded
        if (document.readyState === 'complete') {
            finishLoading();
        } else {
            // Wait for it to fully load
            window.addEventListener('load', finishLoading);
        }
    }
}, loadingIntervalDuration);

function finishLoading() {
    loadingCountElement.textContent = 100;

    setTimeout(() => {
        loadingContainer.style.display = 'none';
        mainContent.style.display = 'block';
    }, 500);
}