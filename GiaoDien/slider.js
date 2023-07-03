

const imgFeature = document.querySelector('.img-feature')
const listImg = document.querySelectorAll('.list-img img')

listImg.forEach((imgElement, index) => {
    imgElement.addEventListener('click', e => {
        updateImageByIndex(index)
    })
});
