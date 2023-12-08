function updateQuantity(change) {
  // Get the current value of the input
  var input = document.getElementById('quantity');
  var currentValue = parseInt(input.value);

  // Update the input value based on the change parameter
  var newValue = currentValue + change;

  // Ensure the new value is not less than 1
  newValue = Math.max(1, newValue);

  // Update the input value
  input.value = newValue;
}
function toggleHeartIcon() {
  var heartIcon = document.getElementById('heartIcon');

  // Toggle between 'fa-regular' and 'fa-solid' classes
  if (heartIcon.classList.contains('fa-regular')) {
    heartIcon.classList.remove('fa-regular');
    heartIcon.classList.add('fa-solid');
    heartIcon.style.color = '#6c4933'; // Change color to red for solid heart
  } else {
    heartIcon.classList.remove('fa-solid');
    heartIcon.classList.add('fa-regular');
    heartIcon.style.color = '#6c4933'; // Change color back to the original color for regular heart
  }
}
function changeImage(newSrc) {
  var productImage = document.getElementById('product-image');
  productImage.src = newSrc;
}
