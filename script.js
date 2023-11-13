const elements = document.querySelectorAll('.navbar a, .search-input, .search-button');
let currentIndex = 0;

// İlk başta div gizli olacak
const selectedDiv = document.querySelector('.selected-div');
selectedDiv.style.display = 'none';

function setFocus() {
    elements.forEach((element, index) => {
        element.style.backgroundColor = 'transparent';
    });

    elements[currentIndex].focus();
    elements[currentIndex].style.backgroundColor = 'gold';

    // Aşağı ok tuşuna basıldığında seçili div'i göster ve gösterildiğini anlayın
    if (currentIndex === elements.length - 1) {
        selectedDiv.style.display = 'block';
        console.log('Div seçildi');
    } else {
        selectedDiv.style.display = 'none'; // Diğer öğeler seçilmediğinde gizle
    }
}

document.addEventListener('keydown', function (event) {
    if (event.key === 'ArrowLeft') {
        currentIndex = (currentIndex - 1 + elements.length) % elements.length;
    } else if (event.key === 'ArrowRight') {
        currentIndex = (currentIndex + 1) % elements.length;
    }
    setFocus();
});

document.addEventListener('keyup', function (event) {
    if (event.key === 'Enter') {
        if (currentIndex === elements.length - 1) {
            elements[currentIndex].querySelector('input').focus();
        } else if (elements[currentIndex].classList.contains('search-input')) {
            elements[currentIndex].querySelector('input').focus();
        } else {
            elements[currentIndex].click();
        }
    }
});

setFocus();

