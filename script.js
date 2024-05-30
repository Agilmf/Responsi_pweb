// Fungsi untuk mengubah teks pada elemen dengan ID 'feedback'
function showFeedback(message) {
    var feedbackElement = document.getElementById('feedback');
    feedbackElement.innerHTML = message;
    feedbackElement.style.display = 'block';
}
