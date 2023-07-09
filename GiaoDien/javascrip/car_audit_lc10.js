function toggleAnswerBox(index) {
    var answer = document.querySelectorAll('.answer')[index - 1];
    answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
  }