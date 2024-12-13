// // JavaScript to switch tabs based on the button clicked
// document.getElementById('myModal').addEventListener('show.bs.modal', function (event) {
//     var button = event.relatedTarget; // Button that triggered the modal
//     var tabToShow = button.getAttribute('data-whatever'); // Extract info from data-* attributes
//     // Switch to the appropriate tab
//     if (tabToShow === 'login') {
//         var loginTab = new bootstrap.Tab(document.getElementById('login-tab'));
//         loginTab.show();
//     } else if (tabToShow === 'signup') {
//         var signupTab = new bootstrap.Tab(document.getElementById('signup-tab'));
//         signupTab.show();
//     } else {
//         var defaultTab = new bootstrap.Tab(document.getElementById('login-tab'));
//         defaultTab.show(); // Default to login if 'default' button is clicked
//     }
// });